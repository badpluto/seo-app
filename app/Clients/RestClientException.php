<?php

namespace app\Clients;

use Exception;

class RestClientException extends Exception
{
    protected $http_code;

    public function __construct(string $message, int $code = 0, int $http_code = 0, Exception $previous = null)
    {
        $this->http_code = $http_code;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return int the http code error representation of the exception.
     */
    public function getHttpCode()
    {
        return $this->http_code;
    }

    /**
     * @return string the string representation of the exception.
     */
    public function __toString(): string
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message} (HTTP status code: {$this->http_code})\n";
    }
}