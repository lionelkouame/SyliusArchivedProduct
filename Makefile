# check coding standards
coding:
	vendor/bin/ecs check src
.PHONY: coding

coding-fix:
	vendor/bin/ecs check src --fix
.PHONY: coding-fix

php-stan:
	vendor/bin/phpstan analyse -c phpstan.neon -l 1  src/
.PHONY: php-stan

container:
	symfony console debug:container
.PHONY: container

config-product-controller:
	symfony console debug:config sylius.controller.product
# clear cache
cc:
	symfony console cache:clear
