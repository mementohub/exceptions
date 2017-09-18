<?php

namespace iMemento\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException as SymfonyHttpException;

class HttpException extends SymfonyHttpException
{

    private $id;

    public function __construct($statusCode, $message = null, \Exception $previous = null, array $headers = array(), $code = 0)
    {
        $this->id = uniqid();

        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }

    public function getId()
    {
        return $this->id;
    }

}