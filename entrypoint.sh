#!/bin/bash
set -e

source /gh-toolkit/shell.sh

gh_log ""

gitconfig "Github Repository Rooster"

gh_validate_env "GITHUB_TOKEN" "Set the GITHUB_TOKEN env variable"

GIT_URL="https://x-access-token:${GITHUB_TOKEN}@github.com/${GITHUB_REPOSITORY}.git"

php /action-repository-roster/app.php

git push $GIT_URL
