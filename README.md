# iMemento HTTP Exceptions
This package provides some common exceptions to be used in all iMemento Services.

## Install
```bash
composer require imemento/exceptions
```

## Usage
```php
throw new ResourceException($message, $debug, $code, $previous, $headers);
```
All our exceptions that extend the HttpException class have a unique id, optional debug info and an error code. They will be mapped to a specific response from [http-responses](https://gitlab.com/imemento/composer/packages/http-responses) using our custom [error handler](https://gitlab.com/imemento/composer/packages/exceptions-laravel).

## Errors

| Exception  | Status Code  |
|------------|-------------:|
| iMemento\Exceptions\ResourceException                                     |	422 |
| iMemento\Exceptions\UpdateResourceFailedException                         |	422 |
| iMemento\Exceptions\DeleteResourceFailedException                         |	422 |
| iMemento\Exceptions\StoreResourceFailedException                          |	422 |
| Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException          |	403 |
| Symfony\Component\HttpKernel\Exception\BadRequestHttpException            |	400 |
| Symfony\Component\HttpKernel\Exception\ConflictHttpException              |	409 |
| Symfony\Component\HttpKernel\Exception\GoneHttpException                  |	410 |
| Symfony\Component\HttpKernel\Exception\HttpException                      |	500 |
| Symfony\Component\HttpKernel\Exception\LengthRequiredHttpException        |	411 |
| Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException      |	405 |
| Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException         |	406 |
| Symfony\Component\HttpKernel\Exception\NotFoundHttpException              |	404 |
| Symfony\Component\HttpKernel\Exception\PreconditionFailedHttpException    |	412 |
| Symfony\Component\HttpKernel\Exception\PreconditionRequiredHttpException  |	428 |
| Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException    |	503 |
| Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException       |	429 |
| Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException          |	401 |
| Symfony\Component\HttpKernel\Exception\UnsupportedMediaTypeHttpException  |	415 |