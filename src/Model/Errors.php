<?php

namespace Gyroscops\Harbor\Api\Model;

class Errors
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var list<Error>|null
     */
    protected $errors;
    /**
     * 
     *
     * @return list<Error>|null
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<Error>|null $errors
     *
     * @return self
     */
    public function setErrors(?array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}