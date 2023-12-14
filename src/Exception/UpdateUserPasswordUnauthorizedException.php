<?php

namespace Gyroscops\Harbor\Api\Exception;

class UpdateUserPasswordUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\Errors
     */
    private $errors;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Gyroscops\Harbor\Api\Model\Errors $errors, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->errors = $errors;
        $this->response = $response;
    }
    public function getErrors() : \Gyroscops\Harbor\Api\Model\Errors
    {
        return $this->errors;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}