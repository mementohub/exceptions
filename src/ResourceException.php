<?php

namespace iMemento\Exceptions;

class ResourceException extends Exception
{
    /**
     * Create a new resource exception instance.
     *
     * @param string     $message
     * @param null       $debug
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct($message = null, $debug = null, $code = 1100, \Exception $previous = null)
    {
        parent::__construct($message, $debug, $code, $previous);
    }
}