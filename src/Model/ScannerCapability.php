<?php

namespace Harbor\Api\Model;

class ScannerCapability
{
    /**
     * 
     *
     * @var string[]
     */
    protected $producesMimeTypes;
    /**
     * 
     *
     * @var string[]
     */
    protected $consumesMimeTypes;
    /**
     * 
     *
     * @return string[]
     */
    public function getProducesMimeTypes() : array
    {
        return $this->producesMimeTypes;
    }
    /**
     * 
     *
     * @param string[] $producesMimeTypes
     *
     * @return self
     */
    public function setProducesMimeTypes(array $producesMimeTypes) : self
    {
        $this->producesMimeTypes = $producesMimeTypes;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getConsumesMimeTypes() : array
    {
        return $this->consumesMimeTypes;
    }
    /**
     * 
     *
     * @param string[] $consumesMimeTypes
     *
     * @return self
     */
    public function setConsumesMimeTypes(array $consumesMimeTypes) : self
    {
        $this->consumesMimeTypes = $consumesMimeTypes;
        return $this;
    }
}