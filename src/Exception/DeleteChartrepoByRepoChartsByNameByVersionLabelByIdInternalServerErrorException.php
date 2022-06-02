<?php

namespace Harbor\Api\Exception;

class DeleteChartrepoByRepoChartsByNameByVersionLabelByIdInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Harbor\Api\Model\InternalChartAPIError
     */
    private $internalChartAPIError;
    public function __construct(\Harbor\Api\Model\InternalChartAPIError $internalChartAPIError)
    {
        parent::__construct('Internal server error occurred');
        $this->internalChartAPIError = $internalChartAPIError;
    }
    public function getInternalChartAPIError() : \Harbor\Api\Model\InternalChartAPIError
    {
        return $this->internalChartAPIError;
    }
}