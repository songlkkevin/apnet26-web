#!/usr/bin/env bash
set -euo pipefail

# Helper script to generate a static copy of the PHP site located in `web/`.
# Usage: ./scripts/generate_static.sh [port]
# Default port: 8001

PORT=${1:-8001}
# Optional comma-separated domains to exclude from wget (example: "acm.org,cdn.example.com").
# If empty, wget will NOT span hosts (will only fetch the local PHP server at 127.0.0.1).
EXCLUDE_DOMAINS=${2:-}
# If set to 1, the script will exit with non-zero when wget log contains missing assets (404).
# If 0 (default), missing assets are only warned about and do not fail the script.
FAIL_ON_MISSING=${FAIL_ON_MISSING:-0}
ROOT_DIR="$(cd "$(dirname "$0")/.." && pwd)"
WEB_DIR="$ROOT_DIR/web"
OUT_DIR="$ROOT_DIR/static_site"

if [ ! -d "$WEB_DIR" ]; then
  echo "Error: web directory not found at $WEB_DIR" >&2
  exit 1
fi

echo "Cleaning $OUT_DIR"
rm -rf "$OUT_DIR"
mkdir -p "$OUT_DIR"

echo "Starting PHP built-in server on 127.0.0.1:$PORT (serving $WEB_DIR)"
php -S 127.0.0.1:$PORT -t "$WEB_DIR" >/tmp/php-server.log 2>&1 &
PHP_PID=$!

trap 'echo "Stopping PHP ($PHP_PID)"; kill $PHP_PID 2>/dev/null || true' EXIT

echo "Waiting for server to be ready..."
for i in {1..15}; do
  if curl -sSf "http://127.0.0.1:$PORT/" >/dev/null; then
    echo "Server ready"; break
  fi
  sleep 1
done

echo "Running wget to mirror site into $OUT_DIR"

# Build wget args. By default we DO NOT span hosts to avoid fetching external domains.
WGET_ARGS=(--convert-links --adjust-extension --page-requisites --no-parent \
  --no-host-directories --directory-prefix="$OUT_DIR" -e robots=off \
  --timeout=15 --tries=2 --wait=0.2 --quota=0)

if [ -n "$EXCLUDE_DOMAINS" ]; then
  # If the caller passed exclude domains, allow spanning hosts but exclude the given domains.
  WGET_ARGS+=(--span-hosts --exclude-domains="$EXCLUDE_DOMAINS")
  # Limit recursion depth when spanning hosts to avoid deep external crawls
  WGET_ARGS+=(--recursive --level=3)
else
  # Do not span hosts by default (only fetch from 127.0.0.1)
  # Restrict to the local host to be extra safe
  WGET_ARGS+=(--recursive --level=5 --domains=127.0.0.1)
fi

echo "wget arguments: ${WGET_ARGS[*]}"
WGET_LOG="$ROOT_DIR/tmp/wget-$(date +%s).log"
mkdir -p "$(dirname "$WGET_LOG")"

# Run wget but don't let set -e abort the script on wget non-zero exit; capture exit code and continue.
set +e
wget --output-file="$WGET_LOG" "http://127.0.0.1:$PORT/" "${WGET_ARGS[@]}"
WGET_EXIT=$?
set -e

echo "wget finished with exit code: $WGET_EXIT (log: $WGET_LOG)"

# Detect missing assets (404) from wget log. Pattern matches common wget messages like 'ERROR 404: Not Found.'
MISSING_LINES=$(grep -E "ERROR 404|404 Not Found| 404:" "$WGET_LOG" || true)
MISSING_COUNT=0
if [ -n "$MISSING_LINES" ]; then
  MISSING_COUNT=$(echo "$MISSING_LINES" | wc -l | tr -d ' ')
fi

if [ "$MISSING_COUNT" -gt 0 ]; then
  echo "Warning: detected $MISSING_COUNT missing asset(s) during wget. Sample lines:"
  echo "$MISSING_LINES" | sed -n '1,20p'
  if [ "${FAIL_ON_MISSING:-0}" = "1" ]; then
    echo "FAIL_ON_MISSING=1; failing the build due to missing assets." >&2
    exit 2
  else
    echo "FAIL_ON_MISSING not set; continuing despite missing assets. To fail on missing assets set FAIL_ON_MISSING=1" >&2
  fi
fi

if [ -d "$OUT_DIR/127.0.0.1:$PORT" ]; then
  echo "Moving files out of host subdirectory"
  mv "$OUT_DIR/127.0.0.1:$PORT"/* "$OUT_DIR/" || true
  rmdir "$OUT_DIR/127.0.0.1:$PORT" || true
fi

echo "Creating .nojekyll"
touch "$OUT_DIR/.nojekyll"

echo "Static site generated at $OUT_DIR"
