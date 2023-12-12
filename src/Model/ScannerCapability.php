<?php

namespace Gyroscops\Harbor\Api\Model;

class ScannerCapability
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $consumesMimeTypes;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $producesMimeTypes;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getConsumesMimeTypes() : ?array
    {
        return $this->consumesMimeTypes;
    }
    /**
     * 
     *
     * @param string[]|null $consumesMimeTypes
     *
     * @return self
     */
    public function setConsumesMimeTypes(?array $consumesMimeTypes) : self
    {
        $this->consumesMimeTypes = $consumesMimeTypes;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getProducesMimeTypes() : ?array
    {
        return $this->producesMimeTypes;
    }
    /**
     * 
     *
     * @param string[]|null $producesMimeTypes
     *
     * @return self
     */
    public function setProducesMimeTypes(?array $producesMimeTypes) : self
    {
        $this->producesMimeTypes = $producesMimeTypes;
        return $this;
    }
}