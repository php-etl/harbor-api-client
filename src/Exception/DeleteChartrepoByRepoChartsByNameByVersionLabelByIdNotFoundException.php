<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteChartrepoByRepoChartsByNameByVersionLabelByIdNotFoundException extends NotFoundException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\NotFoundChartAPIError
     */
    private $notFoundChartAPIError;
    public function __construct(\Gyroscops\Harbor\Api\Model\NotFoundChartAPIError $notFoundChartAPIError)
    {
        parent::__construct('Not found');
        $this->notFoundChartAPIError = $notFoundChartAPIError;
    }
    public function getNotFoundChartAPIError() : \Gyroscops\Harbor\Api\Model\NotFoundChartAPIError
    {
        return $this->notFoundChartAPIError;
    }
}