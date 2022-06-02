<?php

namespace Harbor\Api\Exception;

class GetChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Harbor\Api\Model\UnauthorizedChartAPIError
     */
    private $unauthorizedChartAPIError;
    public function __construct(\Harbor\Api\Model\UnauthorizedChartAPIError $unauthorizedChartAPIError)
    {
        parent::__construct('Unauthorized');
        $this->unauthorizedChartAPIError = $unauthorizedChartAPIError;
    }
    public function getUnauthorizedChartAPIError() : \Harbor\Api\Model\UnauthorizedChartAPIError
    {
        return $this->unauthorizedChartAPIError;
    }
}