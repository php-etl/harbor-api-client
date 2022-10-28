<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteChartrepoByRepoChartsByNameByVersionLabelByIdBadRequestException extends BadRequestException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\BadRequestFormatedError
     */
    private $badRequestFormatedError;
    public function __construct(\Gyroscops\Harbor\Api\Model\BadRequestFormatedError $badRequestFormatedError)
    {
        parent::__construct('Bad request');
        $this->badRequestFormatedError = $badRequestFormatedError;
    }
    public function getBadRequestFormatedError(): \Gyroscops\Harbor\Api\Model\BadRequestFormatedError
    {
        return $this->badRequestFormatedError;
    }
}
