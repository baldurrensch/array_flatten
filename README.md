# Array Flatten

This is a naive solution using array_merge and could be optimized.

## Running

```
docker-compose up -d 
docker exec -it array-flatten-php-fpm composer install
docker exec -it array-flatten-php-fpm vendor/bin/phpunit tests/
```