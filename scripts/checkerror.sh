#!/bin/bash

source ./scripts/config.sh

${bin_dir}/parallel-lint src/ tests/ && ${bin_dir}/phpmd src/,tests/ text rulesets.xml
