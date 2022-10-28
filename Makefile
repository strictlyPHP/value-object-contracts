.PHONY: help
help: ## Display this help message
	@cat $(MAKEFILE_LIST) | grep -e "^[a-zA-Z_\-]*: *.*## *" | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

#################
### COMMANDS ####
#################

.PHONY: analyze
analyze: ## Runs static analysis tools
		 docker build -t strictlyphp/php-value-object-contracts . && docker run --user=1000:1000 --rm --name strictlyphp-php-value-object-contracts -v "${PWD}":/usr/src/myapp -w /usr/src/myapp strictlyphp/php-value-object-contracts php ./vendor/bin/phpstan analyse -l 6 -c phpstan.neon src

.PHONY: install
install: ## Install dependencies
		 docker build -t strictlyphp/php-value-object-contracts . && docker run --user=1000:1000 --rm --name strictlyphp-php-value-object-contracts -v "${PWD}":/usr/src/myapp -w /usr/src/myapp strictlyphp/php-value-object-contracts composer install

.PHONY: style
style: ## Check coding style
		 docker build -t strictlyphp/php-value-object-contracts . && docker run --user=1000:1000 --rm --name strictlyphp-php-value-object-contracts -v "${PWD}":/usr/src/myapp -w /usr/src/myapp strictlyphp/php-value-object-contracts php ./vendor/bin/ecs