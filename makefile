.DEFAULT_GOAL: help
.SILENT: help install installhooks setup test checkerror checkstyle format report
.PHONY: help install installhooks setup test checkerror checkstyle format report

help:
	bash scripts/help.sh

install: composer.json
	bash scripts/install.sh

installhooks: scripts/git_hooks/
	bash scripts/installhooks.sh

setup: install installhooks

test: phpunit.xml.dist
	bash scripts/test.sh

checkerror: src/ tests/ rulesets.xml
	bash scripts/checkerror.sh

checkstyle: src/
	bash scripts/checkstyle.sh

format: src/
	bash scripts/format.sh

report: src/
	bash scripts/report.sh
