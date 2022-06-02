<?php

namespace Harbor\Api\Endpoint;

class DeleteUserByUserId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
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
    use \Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Harbor\Api\Exception\DeleteUserByUserIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteUserByUserIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteUserByUserIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteUserByUserIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteUserByUserIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\DeleteUserByUserIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\DeleteUserByUserIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\DeleteUserByUserIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\DeleteUserByUserIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\DeleteUserByUserIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}