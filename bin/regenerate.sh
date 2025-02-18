#!/bin/bash
#
# This script must be called from sdk directory!
#
# In order to create a new patch file for the whole sdk directory, follow these steps:
#
# 1. Use this shell script to create a fresh generated SDK (with existing patches applied)
# 2. Commit the changes in order to get a clean git staging area
# 3. make SDK Changes and add changed files to the staging area (git add path/to/file)
# 4. make SDK Changes and add changed files to the staging area (git add path/to/file)
# 5. Head to the codeigniter/third_party/sezzle dir and create the patch file with
#    git diff --cached > ds24-sezzle-<current-date>.patch
# 6. Add the patch file to the patches section in this file, keep chronological order!
# 7. Commit & push all changes. Verify your work with re-running this script. If all is done properly, no changes are
#    made.
#

if ! command -v git &> /dev/null
then
    echo "Git is required for this operation!"
    exit
fi

set -e

echo Creating SDK...
docker run --rm -v $PWD:/local openapitools/openapi-generator-cli:v5.4.0 generate -i /local/resources/sezzle-openapi.yaml -g php --additional-properties=packageName=Sezzle,apiPackage=Sezzle,modelPackage=Sezzle -o /local &> /dev/null

# APPLY PATCHES
echo Applying patches...
rm -f lib/Sezzle/SessionStatusExtended.php # This file is not part of generated sdk and will be added by patch file
git apply resources/ds24-sezzle-2022-10-18.patch
git apply resources/ds24-sezzle-2023-10-17.patch

echo Change SDK owner...
OWNER=$USER
sudo chown -R $OWNER ./

echo
echo -e "\033[32mDone!"
echo
