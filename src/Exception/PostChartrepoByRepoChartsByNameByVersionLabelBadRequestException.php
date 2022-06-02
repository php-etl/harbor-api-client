<?php

namespace Harbor\Api\Exception;

class PostChartrepoByRepoChartsByNameByVersionLabelBadRequestException extends BadRequestException
{
    /**
     * @var \Harbor\Api\Model\BadRequestFormatedError
     */
    private $badRequestFormatedError;
    public function __construct(\Harbor\Api\Model\BadRequestFormatedError $badRequestFormatedError)
    {
        parent::__construct('Bad request');
        $this->badRequestFormatedError = $badRequestFormatedError;
    }
    public function getBadRequestFormatedError() : \Harbor\Api\Model\BadRequestFormatedError
    {
        return $this->badRequestFormatedError;
    }
}