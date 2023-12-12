<?php

namespace Gyroscops\Harbor\Api\Exception;

class UpdateScanAllScheduleBadRequestException extends BadRequestException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\Errors
     */
    private $errors;
    public function __construct(\Gyroscops\Harbor\Api\Model\Errors $errors)
    {
        parent::__construct('Bad request');
        $this->errors = $errors;
    }
    public function getErrors() : \Gyroscops\Harbor\Api\Model\Errors
    {
        return $this->errors;
    }
}