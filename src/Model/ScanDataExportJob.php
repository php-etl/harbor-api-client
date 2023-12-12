<?php

namespace Gyroscops\Harbor\Api\Model;

class ScanDataExportJob
{
    /**
     * The id of the scan data export job
     *
     * @var int|null
     */
    protected $id;
    /**
     * The id of the scan data export job
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The id of the scan data export job
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
}