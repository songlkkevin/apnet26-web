#!/usr/bin/env bash
set -euo pipefail

# Helper script to generate a static copy of the PHP site located in `web/`.
# Usage: ./scripts/generate_static.sh [port]
# Default port: 8001

PORT=${1:-8001}
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
wget --mirror --convert-links --adjust-extension --page-requisites --no-parent \
  --no-host-directories --directory-prefix="$OUT_DIR" -e robots=off --span-hosts "http://127.0.0.1:$PORT/"

if [ -d "$OUT_DIR/127.0.0.1:$PORT" ]; then
  echo "Moving files out of host subdirectory"
  mv "$OUT_DIR/127.0.0.1:$PORT"/* "$OUT_DIR/" || true
  rmdir "$OUT_DIR/127.0.0.1:$PORT" || true
fi

echo "Creating .nojekyll"
touch "$OUT_DIR/.nojekyll"

echo "Static site generated at $OUT_DIR"
