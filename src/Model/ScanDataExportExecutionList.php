<?php

namespace Gyroscops\Harbor\Api\Model;

class ScanDataExportExecutionList
{
    /**
     * The list of scan data export executions
     *
     * @var ScanDataExportExecution[]|null
     */
    protected $items;
    /**
     * The list of scan data export executions
     *
     * @return ScanDataExportExecution[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * The list of scan data export executions
     *
     * @param ScanDataExportExecution[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}