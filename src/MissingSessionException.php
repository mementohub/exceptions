<?php

namespace iMemento\Exceptions;

class MissingSessionException extends Exception
{
    /**
     *
     * @param string     $message
     * @param null       $debug
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct($message = null, $debug = null, $code = 1020, \Exception $previous = null)
    {
        parent::__construct($message, $debug, $code, $previous);
    }
}