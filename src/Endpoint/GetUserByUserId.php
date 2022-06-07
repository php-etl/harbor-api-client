<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetUserByUserId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $user_id;
    /**
     * Get user's profile with user id.
     *
     * @param int $userId Registered user ID
     */
    public function __construct(int $userId)
    {
        $this->user_id = $userId;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\User
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\User', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUserByUserIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUserByUserIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUserByUserIdUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUserByUserIdBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUserByUserIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}