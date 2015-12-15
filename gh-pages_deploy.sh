#!/bin/bash

repo_dir="$(mktemp -d)"

git config --global user.name "Travis CI"
git config --global user.email "travis-ci@example.com"

git clone --depth 1 https://github.com/${TRAVIS_REPO_SLUG}.git --branch gh-pages --single-branch "$repo_dir" >/dev/null 2>&1 || exit 1

cd "$repo_dir"

docs_base_dir="$repo_dir/docs/api/"
docs_revision="${TRAVIS_TAG}"
docs_dir="$docs_base_dir/${docs_revision}"

src_dir="${TRAVIS_BUILD_DIR}/lib"

apigen="$(mktemp)"
wget https://github.com/ApiGen/ApiGen/releases/download/v4.1.2/apigen.phar -O "${apigen}"
chmod +x "${apigen}"

rm -rf "$docs_dir" || true
mkdir -p "$docs_dir"
php "$apigen" generate -s "$src_dir" -d "$docs_dir" --template-theme=bootstrap --debug || exit 2
ln -f -s "${docs_revision}" "${docs_base_dir}/latest"

git add .
git commit -m "API docs regenerated for tag ${TRAVIS_TAG}"
git push "https://${GH_TOKEN}@github.com/${TRAVIS_REPO_SLUG}" gh-pages:gh-pages >/dev/null 2>&1 || exit 3
