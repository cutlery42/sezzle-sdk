# Docker image name
docker_image := "sezzle-php-sdk"

# List available commands
default:
    @just --list

# Shell into the Docker container
shell: build
    docker run --rm -ti -v ${PWD}:/app {{docker_image}} bash

# Build Docker image
build:
    docker build -t {{docker_image}} .

# Install all dependencies
install: build
    docker run --rm -v ${PWD}:/app {{docker_image}} composer install

# Update dependencies
update: build
    docker run --rm -v ${PWD}:/app {{docker_image}} composer update

# Run PHPStan analysis
phpstan: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/phpstan analyse lib test

# Update PHPStan baseline
phpstan-baseline: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/phpstan analyse lib --generate-baseline

# Run Psalm analysis
psalm: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/psalm

# Run Psalm analysis
psalm-baseline: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/psalm --set-baseline=psalm-baseline.xml

# Run Rector in dry-run mode
rector: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/rector process --dry-run

# Run all static analysis tools
analyse: phpstan psalm style-fix

# Run unit tests
test: build
    docker run --rm -v ${PWD}:/app {{docker_image}} vendor/bin/phpunit

# Run Rector and apply changes
rector-fix: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/rector process

# Run CS Fixer
style-fix: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/php-cs-fixer fix --diff

# Clean vendor directory and composer lock
clean:
    rm -rf vendor
    rm -f composer.lock

# Clean Docker image
docker-clean:
    docker rmi {{docker_image}}

# Clean everything (vendor, lock file, and Docker image)
clean-all: clean docker-clean
