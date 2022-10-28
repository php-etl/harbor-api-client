<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetQuotaByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Quota does not exist.');
    }
}
