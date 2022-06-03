<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostChartrepoByRepoChartsByNameByVersionLabelInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\InternalChartAPIError
     */
    private $internalChartAPIError;
    public function __construct(\Gyroscops\Harbor\Api\Model\InternalChartAPIError $internalChartAPIError)
    {
        parent::__construct('Internal server error occurred');
        $this->internalChartAPIError = $internalChartAPIError;
    }
    public function getInternalChartAPIError() : \Gyroscops\Harbor\Api\Model\InternalChartAPIError
    {
        return $this->internalChartAPIError;
    }
}