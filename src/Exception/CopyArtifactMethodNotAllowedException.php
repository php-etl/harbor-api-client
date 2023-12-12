<?php

namespace Gyroscops\Harbor\Api\Exception;

class CopyArtifactMethodNotAllowedException extends MethodNotAllowedException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\Errors
     */
    private $errors;
    public function __construct(\Gyroscops\Harbor\Api\Model\Errors $errors)
    {
        parent::__construct('Method not allowed');
        $this->errors = $errors;
    }
    public function getErrors() : \Gyroscops\Harbor\Api\Model\Errors
    {
        return $this->errors;
    }
}