<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteUserByUserId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $user_id;
    /**
    * This endpoint let administrator of Harbor mark a registered user as
    be removed.It actually won't be deleted from DB.
    
    *
    * @param int $userId User ID for marking as to be removed.
    */
    public function __construct(int $userId)
    {
        $this->user_id = $userId;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{user_id}'), array($this->user_id), '/users/{user_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}