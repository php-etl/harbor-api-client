<?php

namespace Gyroscops\Harbor\Api\Exception;

class CreateLabelConflictException extends ConflictException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\Errors
     */
    private $errors;
    public function __construct(\Gyroscops\Harbor\Api\Model\Errors $errors)
    {
        parent::__construct('Conflict');
        $this->errors = $errors;
    }
    public function getErrors() : \Gyroscops\Harbor\Api\Model\Errors
    {
        return $this->errors;
    }
}