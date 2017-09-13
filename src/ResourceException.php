<?php

namespace iMemento\Exceptions;

use Exception;
use iMemento\Exceptions\HttpException;

class ResourceException extends HttpException
{
    /**
     * Errors array.
     *
     * @var array
     */
    protected $errors;

    /**
     * Create a new resource exception instance.
     *
     * @param string                               $message
     * @param array                                $errors
     * @param \Exception                           $previous
     * @param array                                $headers
     * @param int                                  $code
     */
    public function __construct($message = null, $errors = [], Exception $previous = null, $headers = [], $code = 0)
    {
        //TODO: use MessageBag for errors? only available in Laravel/Lumen
        //TODO: better to wrap the errors with MessageBag when we handle the errors - more generic
        $this->errors = $errors;

        parent::__construct(422, $message, $previous, $headers, $code);
    }
}