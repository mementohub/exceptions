<?php

namespace iMemento\Exceptions;

class ExpiredAuthTokenException extends Exception
{
    /**
     * Create a new resource exception instance.
     *
     * @param string     $message
     * @param null       $debug
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct($message = null, $debug = null, $code = 1002, \Exception $previous = null)
    {
        parent::__construct($message, $debug, $code, $previous);
    }
}