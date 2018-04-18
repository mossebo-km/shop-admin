#!/bin/bash
# Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
# For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license

# Build CKEditor on Travis CI for testing.

BRANCH=$1

# Clone and setup ckeditor-presets repository.
cd ..
git clone https://github.com/ckeditor/ckeditor-presets.git
cd ckeditor-presets
git fetch --all
git checkout $BRANCH
git reset --hard origin/$BRANCH

# Remove ckeditor-dev submodule as the local one will be used.
git submodule deinit ckeditor
git rm ckeditor

# Update submodule paths to use HTTPS instead of SSH.
sed -i "s/git\@/https:\/\//g" .gitmodules
sed -i "s/com:/com\//g" .gitmodules

# Init submodules.
git submodule update --init

# Link to ckeditor-dev repository which triggered the build.
rm -rf ckeditor
ln -s ../ckeditor-dev/ ckeditor

# Build full preset.
./build.sh full all -t
cd "./build/$(ls -1t ./build/ | head -n 1)/full-all/ckeditor/"

# Copy bender.ci.js file as it is removed during build.
cp ../../../../../ckeditor-dev/bender.ci.js bender.ci.js
