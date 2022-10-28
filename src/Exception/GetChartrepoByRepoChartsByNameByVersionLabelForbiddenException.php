<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetChartrepoByRepoChartsByNameByVersionLabelForbiddenException extends ForbiddenException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\ForbiddenChartAPIError
     */
    private $forbiddenChartAPIError;
    public function __construct(\Gyroscops\Harbor\Api\Model\ForbiddenChartAPIError $forbiddenChartAPIError)
    {
        parent::__construct('Operation is forbidden or quota exceeded');
        $this->forbiddenChartAPIError = $forbiddenChartAPIError;
    }
    public function getForbiddenChartAPIError(): \Gyroscops\Harbor\Api\Model\ForbiddenChartAPIError
    {
        return $this->forbiddenChartAPIError;
    }
}
