# Docker image name
docker_image := "sezzle-php-sdk"

# List available commands
default:
    @just --list

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
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/phpstan analyse lib --level 5

# Run Psalm analysis
psalm: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/psalm --output-format=github

# Run Rector in dry-run mode
rector: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/rector process --dry-run

# Run all static analysis tools
analyse: phpstan psalm rector

# Run unit tests
test: build
    docker run --rm -v ${PWD}:/app {{docker_image}} vendor/bin/phpunit

# Run Rector and apply changes
rector-fix: build
    docker run --rm -v ${PWD}:/app {{docker_image}} php -dmemory_limit=-1 vendor/bin/rector process

# Clean vendor directory and composer lock
clean:
    rm -rf vendor
    rm -f composer.lock

# Clean Docker image
docker-clean:
    docker rmi {{docker_image}}

# Clean everything (vendor, lock file, and Docker image)
clean-all: clean docker-clean
