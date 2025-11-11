#!/usr/bin/env bash
set -euo pipefail

# Helper script to generate a static copy of the PHP site located in `web/`.
# Usage: ./scripts/generate_static.sh [port]
# Default port: 8001

PORT=${1:-8001}
# Optional comma-separated domains to exclude from wget (example: "acm.org,cdn.example.com").
# If empty, wget will NOT span hosts (will only fetch the local PHP server at 127.0.0.1).
EXCLUDE_DOMAINS=${2:-}
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
WGET_ARGS=(--mirror --convert-links --adjust-extension --page-requisites --no-parent \
  --no-host-directories --directory-prefix="$OUT_DIR" -e robots=off)

if [ -n "$EXCLUDE_DOMAINS" ]; then
  # If the caller passed exclude domains, allow spanning hosts but exclude the given domains.
  WGET_ARGS+=(--span-hosts "--exclude-domains=$EXCLUDE_DOMAINS")
  # Note: when excluding domains we must allow spanning hosts so wget can attempt other hosts
else
  # Do not span hosts by default (only fetch from 127.0.0.1)
  :
fi

wget "http://127.0.0.1:$PORT/" "${WGET_ARGS[@]}"

if [ -d "$OUT_DIR/127.0.0.1:$PORT" ]; then
  echo "Moving files out of host subdirectory"
  mv "$OUT_DIR/127.0.0.1:$PORT"/* "$OUT_DIR/" || true
  rmdir "$OUT_DIR/127.0.0.1:$PORT" || true
fi

echo "Creating .nojekyll"
touch "$OUT_DIR/.nojekyll"

echo "Static site generated at $OUT_DIR"
