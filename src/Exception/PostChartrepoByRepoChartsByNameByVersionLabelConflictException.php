<?php

namespace Harbor\Api\Exception;

class PostChartrepoByRepoChartsByNameByVersionLabelConflictException extends ConflictException
{
    /**
     * @var \Harbor\Api\Model\ConflictFormatedError
     */
    private $conflictFormatedError;
    public function __construct(\Harbor\Api\Model\ConflictFormatedError $conflictFormatedError)
    {
        parent::__construct('Conflicts');
        $this->conflictFormatedError = $conflictFormatedError;
    }
    public function getConflictFormatedError() : \Harbor\Api\Model\ConflictFormatedError
    {
        return $this->conflictFormatedError;
    }
}