<?php

namespace Gyroscops\Harbor\Api\Model;

class ComponentOverviewEntry
{
    /**
     * number of the components with certain severity.
     *
     * @var int
     */
    protected $count;
    /**
     * 1-None/Negligible, 2-Unknown, 3-Low, 4-Medium, 5-High
     *
     * @var int
     */
    protected $severity;
    /**
     * number of the components with certain severity.
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * number of the components with certain severity.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->count = $count;
        return $this;
    }
    /**
     * 1-None/Negligible, 2-Unknown, 3-Low, 4-Medium, 5-High
     *
     * @return int
     */
    public function getSeverity() : int
    {
        return $this->severity;
    }
    /**
     * 1-None/Negligible, 2-Unknown, 3-Low, 4-Medium, 5-High
     *
     * @param int $severity
     *
     * @return self
     */
    public function setSeverity(int $severity) : self
    {
        $this->severity = $severity;
        return $this;
    }
}