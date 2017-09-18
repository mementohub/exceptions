<?php

namespace iMemento\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException as SymfonyHttpException;

/**
 * Class HttpException
 *
 * @package iMemento\Exceptions
 */
class HttpException extends SymfonyHttpException
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var
     */
    private $debug;

    /**
     * HttpException constructor.
     *
     * @param string          $statusCode
     * @param null            $message
     * @param null            $debug
     * @param int             $code
     * @param \Exception|null $previous
     * @param array           $headers
     */
    public function __construct($statusCode, $message = null, $debug = null, $code = 0, \Exception $previous = null, array $headers = array())
    {
        $this->id = uniqid();
        $this->debug = $debug;

        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDebug()
    {
        return $this->debug;
    }

}