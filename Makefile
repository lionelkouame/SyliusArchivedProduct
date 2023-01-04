# check coding standards
coding:
	vendor/bin/ecs check src
.PHONY: coding

coding-fix:
	vendor/bin/ecs check src --fix
.PHONY: coding-fix

php-stan:
	vendor/bin/phpstan analyse -c phpstan.neon -l max src/
.PHONY: php-stan
