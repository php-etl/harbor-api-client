<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutUsersByUserIdSysadmin extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $user_id;
    /**
    * This endpoint let a registered user change to be an administrator
    of Harbor.

    *
    * @param int $userId Registered user ID
    * @param \Gyroscops\Harbor\Api\Model\SysAdminFlag $sysadminFlag Toggle a user to admin or not.
    */
    public function __construct(int $userId, \Gyroscops\Harbor\Api\Model\SysAdminFlag $sysadminFlag)
    {
        $this->user_id = $userId;
        $this->body = $sysadminFlag;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{user_id}'), array($this->user_id), '/users/{user_id}/sysadmin');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminNotFoundException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
