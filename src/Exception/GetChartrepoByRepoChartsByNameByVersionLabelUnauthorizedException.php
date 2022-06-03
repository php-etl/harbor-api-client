<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\UnauthorizedChartAPIError
     */
    private $unauthorizedChartAPIError;
    public function __construct(\Gyroscops\Harbor\Api\Model\UnauthorizedChartAPIError $unauthorizedChartAPIError)
    {
        parent::__construct('Unauthorized');
        $this->unauthorizedChartAPIError = $unauthorizedChartAPIError;
    }
    public function getUnauthorizedChartAPIError() : \Gyroscops\Harbor\Api\Model\UnauthorizedChartAPIError
    {
        return $this->unauthorizedChartAPIError;
    }
}