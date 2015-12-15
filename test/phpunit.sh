#!/bin/sh

SCRIPT="$(readlink -f "$0")"
SCRIPT_DIR="$(dirname "$SCRIPT")"

"$SCRIPT_DIR/../vendor/bin/phpunit" "$*"
