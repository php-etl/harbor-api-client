<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteRobotV1ForbiddenException extends ForbiddenException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\Errors
     */
    private $errors;
    public function __construct(\Gyroscops\Harbor\Api\Model\Errors $errors)
    {
        parent::__construct('Forbidden');
        $this->errors = $errors;
    }
    public function getErrors() : \Gyroscops\Harbor\Api\Model\Errors
    {
        return $this->errors;
    }
}