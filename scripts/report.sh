#!/bin/bash

source ./scripts/config.sh

${bin_dir}/phpmetrics --report-html=report/phpmetrics.html src/
