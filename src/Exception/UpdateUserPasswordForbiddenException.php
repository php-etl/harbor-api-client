<?php

namespace Gyroscops\Harbor\Api\Exception;

class UpdateUserPasswordForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('The caller does not have permission to update the password of the user with given ID, or the old password in request body is not correct.');
        $this->response = $response;
    }
    public function getResponse() : ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}