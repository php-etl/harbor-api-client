<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutQuotaByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Quota ID does not exist.');
    }
}
