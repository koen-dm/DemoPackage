# JsonPlaceholderClient

## How to install:
```shell
composer require koendebruijn/demo-package
```

## How to use:
```php
use JsonPlaceholderClient\JsonPlaceholderClient;

$api = new JsonPlaceholderClient();

$api->getAllTodos();
$api->getTodo(1);
```