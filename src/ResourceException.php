<?php

namespace iMemento\Exceptions;

use Exception;

class ResourceException extends HttpException
{

    /**
     * Create a new resource exception instance.
     *
     * @param string     $message
     * @param string     $debug
     * @param int        $code
     * @param \Exception $previous
     * @param array      $headers
     */
    public function __construct($message = null, $debug = null, $code = 0, Exception $previous = null, $headers = [])
    {
        parent::__construct(422, $message, $debug, $code, $previous, $headers);
    }
}