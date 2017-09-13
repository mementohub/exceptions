<?php

namespace iMemento\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException as SymfonyHttpException;

class HttpException extends SymfonyHttpException
{
    //TODO: add our custom methods here
    //TODO: non-http exceptions are needed? probably - if so, create a more generic exception to be extended by all
}