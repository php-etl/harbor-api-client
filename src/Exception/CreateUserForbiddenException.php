<?php

namespace Gyroscops\Harbor\Api\Exception;

class CreateUserForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('When the  self registration is disabled, non-admin does not have permission to create user.  When self registration is enabled, this API can only be called from UI portal, calling it via script will get a 403 error.');
        $this->response = $response;
    }
    public function getResponse() : ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}