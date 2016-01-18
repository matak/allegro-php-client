#!/bin/bash

[[ -z "$TRAVIS" ]] && { echo "This is a build script for Travis CI only"; exit 1; }

[[ "$TRAVIS_PHP_VERSION" != "5.5" ]] && { echo "PHP version is ${TRAVIS_PHP_VERSION}, 5.5 required"; exit 1; }
[[ "$TRAVIS_BRANCH" != "master" ]] && { echo "Git branch is ${TRAVIS_BRANCH}, master required"; exit 1; }
[[ "$TRAVIS_TAG" == "" ]] && { echo "Git tag is empty"; exit 1; }
[[ "$TRAVIS_PULL_REQUEST" != "false" ]] && { echo "Building pull request"; exit 1; }

set -u

repo_dir="$(mktemp -d)"
src_dir="${TRAVIS_BUILD_DIR}/lib"
docs_base_dir="${repo_dir}/docs/api"
apigen_base_dir="${docs_base_dir}/apigen"
phpdoc_base_dir="${docs_base_dir}/phpdoc"
docs_revision="$TRAVIS_TAG"

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

ln -f -s "$( basename "$apigen_dir" )" "${apigen_base_dir}/latest"

## phpDocumentor

phpdoc_dir="${phpdoc_base_dir}/${docs_revision}"
phpdoc="$(mktemp)"
phpdoc_cmd=(php "${phpdoc}")
phpdoc_args=(
    run
    -d "$src_dir"
    -t "$phpdoc_dir"
    --no-interaction
    --visibility "public,protected"
    --sourcecode
    --no-ansi
    --cache-folder "/tmp/phpdoc_cache"
)

wget https://github.com/phpDocumentor/phpDocumentor2/releases/download/v2.8.5/phpDocumentor.phar -O "$phpdoc"

rm -rf "$phpdoc_dir" || true
mkdir -p "$phpdoc_dir"

echo "Running phpDocumentor: " "${phpdoc_cmd[@]}" " " "${phpdoc_args[@]}"
"${phpdoc_cmd[@]}" "${phpdoc_args[@]}" || exit 3

ln -f -s "$( basename "$phpdoc_dir" )" "${phpdoc_base_dir}/latest"

## Push

git add .
git commit -m "API docs regenerated

tag: ${TRAVIS_TAG}
build number: ${TRAVIS_JOB_NUMBER}
build id: ${TRAVIS_JOB_ID}
"
git push "https://${GH_TOKEN}@github.com/${TRAVIS_REPO_SLUG}" gh-pages:gh-pages >/dev/null 2>&1 || exit 126

