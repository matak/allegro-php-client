#!/bin/sh
SCRIPT="$(readlink -f "$0")"
SCRIPTDIR="$(dirname "$SCRIPT")"

DIR_IN="$SCRIPTDIR/../lib"
DIR_OUT="$SCRIPTDIR/public_html/api"

mkdir -p "$DIR_OUT"

find "$DIR_OUT" -mindepth 1 -not -name ".*" -delete
"$SCRIPTDIR/../vendor/bin/apigen" generate -s "$DIR_IN" -d "$DIR_OUT" --template-theme=bootstrap "$@" 2>"$SCRIPTDIR/docsgen_error.log"
