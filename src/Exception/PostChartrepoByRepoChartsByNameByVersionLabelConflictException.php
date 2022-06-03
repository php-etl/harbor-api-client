<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostChartrepoByRepoChartsByNameByVersionLabelConflictException extends ConflictException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\ConflictFormatedError
     */
    private $conflictFormatedError;
    public function __construct(\Gyroscops\Harbor\Api\Model\ConflictFormatedError $conflictFormatedError)
    {
        parent::__construct('Conflicts');
        $this->conflictFormatedError = $conflictFormatedError;
    }
    public function getConflictFormatedError() : \Gyroscops\Harbor\Api\Model\ConflictFormatedError
    {
        return $this->conflictFormatedError;
    }
}