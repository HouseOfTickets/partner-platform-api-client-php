#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd $DIR

# ref: https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/
# Usage example: /bin/sh ./git_push.sh "minor update"

release_note=$1

if [ "$release_note" = "" ]; then
    release_note="Minor update"
    echo "[INFO] No command line input provided. Set \$release_note to $release_note"
fi


# Adds the files in the local repository and stages them for commit.
git add .

# Commits the tracked changes and prepares them to be pushed to a remote repository.
git commit -m "$release_note"

git pull --set-upstream origin main

git push origin main 2>&1 | grep -v 'To https'

