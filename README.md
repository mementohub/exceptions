# iMemento HTTP Exceptions
This package provides some common exceptions to be used in all iMemento Services.

## Install
```bash
composer require imemento/exceptions
```

## Usage
```php
throw new ResourceException($message, $debug, $code, $previous);
```
All our exceptions that extend the HttpException class have a unique id, optional debug info and an error code. They will be mapped to a specific response from [http-responses](https://gitlab.com/imemento/composer/packages/http-responses) using our custom [error handler](https://gitlab.com/imemento/composer/packages/exceptions-laravel).

## Errors

| Exception  | Status Code  |
|------------|-------------:|
| iMemento\Exceptions\Exception                                             |  1000 |
| iMemento\Exceptions\InvalidTokenException                                 |  1001 |
| iMemento\Exceptions\ExpiredAuthTokenException                             |  1002 |
| iMemento\Exceptions\ExpiredPermsTokenException                            |  1003 |
| iMemento\Exceptions\ExpiredConsumerTokenException                         |  1004 |
| iMemento\Exceptions\MissingTokenException                                 |  1005 |
| iMemento\Exceptions\MissingRoleException                                  |  1010 |
| iMemento\Exceptions\ResourceException                                     |  1100 |
| iMemento\Exceptions\UpdateResourceFailedException                         |  1100 |
| iMemento\Exceptions\DeleteResourceFailedException                         |  1100 |
| iMemento\Exceptions\StoreResourceFailedException                          |  1100 |