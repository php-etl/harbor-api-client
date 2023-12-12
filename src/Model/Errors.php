<?php

namespace Gyroscops\Harbor\Api\Model;

class Errors
{
    /**
     * 
     *
     * @var Error[]|null
     */
    protected $errors;
    /**
     * 
     *
     * @return Error[]|null
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param Error[]|null $errors
     *
     * @return self
     */
    public function setErrors(?array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}