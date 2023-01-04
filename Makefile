# check coding standards
coding:
	vendor/bin/ecs check src
.PHONY: coding

coding-fix:
	vendor/bin/ecs check src --fix
.PHONY: coding-fix
