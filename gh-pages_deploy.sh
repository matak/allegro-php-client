#!/bin/bash

set -u

repo_dir="$(mktemp -d)"
src_dir="${TRAVIS_BUILD_DIR}/lib"
docs_base_dir="${repo_dir}/docs/api/"
apigen_base_diir="${docs_base_dir}/apigen"
apigen_base_dir="${docs_base_dir}/phpdoc"
docs_revision="$TRAVIS_TAG"

git config --global user.name "Travis CI"
git config --global user.email "travis-ci@example.com"

git clone --depth 1 https://github.com/${TRAVIS_REPO_SLUG}.git --branch gh-pages --single-branch "$repo_dir" >/dev/null 2>&1 || exit 1
cd "$repo_dir"

## ApiGen

apigen_dir="${apigen_base_dir}/${docs_revision}"
apigen="$(mktemp)"
apigen_cmd=(php "${apigen}")
apigen_args=(
    generate
    -s "$src_dir"
    -d "$apigen_dir"
    --template-theme=bootstrap
    --debug
)

wget https://github.com/ApiGen/ApiGen/releases/download/v4.1.2/apigen.phar -O "$apigen"

rm -rf "$apigen_dir" || true
mkdir -p "$apigen_dir"

echo "Running ApiGen: " "${apigen_cmd[@]}" " " "${apigen_args[@]}"
"${apigen_cmd[@]}" "${apigen_args[@]}" || exit 2

ln -f -s "$apigen_dir" "${apigen_base_dir}/latest"

## phpDocumentor

phpdoc_dir="${phpdoc_base_dir}/${docs_revision}"
phpdoc_cache_dir="~/phpdoc_cache"
phpdoc="$(mktemp)"
phpdoc_cmd=(php "${phpdoc}")
phpdoc_args=(
    run
    -d "$src_dir"
    -t "$phpdoc_dir"
    --cache-folder "$phpdoc_cache_dir"
    --verbose
    --no-interaction
    --visibility "public,protected"
    --sourcecode
    --no-ansi
)

wget https://github.com/phpDocumentor/phpDocumentor2/releases/download/v2.8.5/phpDocumentor.phar -O "$phpdoc"

rm -rf "$phpdoc_dir" || true
mkdir -p "$phpdoc_dir"

echo "Running phpDocumentor: " "${phpdoc_cmd[@]}" " " "${phpdoc_args[@]}"
"${phpdoc_cmd[@]}" "${phpdoc_args[@]}" || exit 3

ln -f -s "$phpdoc_dir" "${phpdoc_base_dir}/latest"

## Push

git add .
git commit -m "API docs regenerated for tag ${TRAVIS_TAG}"
git push "https://${GH_TOKEN}@github.com/${TRAVIS_REPO_SLUG}" gh-pages:gh-pages >/dev/null 2>&1 || exit 126
