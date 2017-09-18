<?php

namespace iMemento\Exceptions;

use Exception;

class ResourceException extends HttpException
{

    /**
     * Create a new resource exception instance.
     *
     * @param string                               $message
     * @param \Exception                           $previous
     * @param array                                $headers
     * @param int                                  $code
     */
    public function __construct($message = null, Exception $previous = null, $headers = [], $code = 0)
    {
        parent::__construct(422, $message, $previous, $headers, $code);
    }
}