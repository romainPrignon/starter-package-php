#!/bin/bash

source ./scripts/config.sh

${bin_dir}/phpunit -c phpunit.xml.dist $@
