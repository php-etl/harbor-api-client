<?php

namespace Harbor\Api\Exception;

class DeleteChartrepoByRepoChartsByNameByVersionLabelByIdNotFoundException extends NotFoundException
{
    /**
     * @var \Harbor\Api\Model\NotFoundChartAPIError
     */
    private $notFoundChartAPIError;
    public function __construct(\Harbor\Api\Model\NotFoundChartAPIError $notFoundChartAPIError)
    {
        parent::__construct('Not found');
        $this->notFoundChartAPIError = $notFoundChartAPIError;
    }
    public function getNotFoundChartAPIError() : \Harbor\Api\Model\NotFoundChartAPIError
    {
        return $this->notFoundChartAPIError;
    }
}