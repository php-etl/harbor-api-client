<?php

namespace Harbor\Api\Exception;

class PostChartrepoByRepoChartsByNameByVersionLabelForbiddenException extends ForbiddenException
{
    /**
     * @var \Harbor\Api\Model\ForbiddenChartAPIError
     */
    private $forbiddenChartAPIError;
    public function __construct(\Harbor\Api\Model\ForbiddenChartAPIError $forbiddenChartAPIError)
    {
        parent::__construct('Operation is forbidden or quota exceeded');
        $this->forbiddenChartAPIError = $forbiddenChartAPIError;
    }
    public function getForbiddenChartAPIError() : \Harbor\Api\Model\ForbiddenChartAPIError
    {
        return $this->forbiddenChartAPIError;
    }
}