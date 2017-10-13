#!/bin/bash

source ./scripts/config.sh

${bin_dir}/phpcs --standard=PSR2 src/
