#!/bin/bash

source ./scripts/config.sh

${bin_dir}/php-cs-fixer fix src/ --rules=@PSR2 || true
