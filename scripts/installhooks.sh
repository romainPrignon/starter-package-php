#!/bin/bash

rm -rf .git/hooks/
cp -a scripts/git_hooks/ .git/hooks/
chmod a+x .git/hooks/*
