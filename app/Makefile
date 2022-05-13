VENDOR=vendor/bin/

test:
	${VENDOR}phpunit

coverage:
	${VENDOR}phpunit --coverage-html build/coverage

phpstan:
	${VENDOR}phpstan analyse --ansi

lint:
	${VENDOR}ecs check --ansi

lint-fix:
	${VENDOR}ecs check --ansi --fix
