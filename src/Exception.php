<?php

namespace iMemento\Exceptions;

use Exception as BaseException;
use Ramsey\Uuid\Uuid;

/**
 * Class HttpException
 *
 * @package iMemento\Exceptions
 */
class Exception extends BaseException
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
     * @param null            $message
     * @param null            $debug
     * @param int             $code
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $debug = null, $code = 1000, \Exception $previous = null)
    {
        $this->id = Uuid::uuid4()->toString();
        $this->debug = $debug;

        parent::__construct($message, $code, $previous);
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