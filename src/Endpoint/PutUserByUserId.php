<?php

namespace Harbor\Api\Endpoint;

class PutUserByUserId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $user_id;
    /**
     * This endpoint let a registered user change his profile.
     *
     * @param int $userId Registered user ID
     * @param \Harbor\Api\Model\UserProfile $profile Only email, realname and comment can be modified.
     */
    public function __construct(int $userId, \Harbor\Api\Model\UserProfile $profile)
    {
        $this->user_id = $userId;
        $this->body = $profile;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{user_id}'), array($this->user_id), '/users/{user_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\PutUserByUserIdBadRequestException
     * @throws \Harbor\Api\Exception\PutUserByUserIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutUserByUserIdForbiddenException
     * @throws \Harbor\Api\Exception\PutUserByUserIdNotFoundException
     * @throws \Harbor\Api\Exception\PutUserByUserIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutUserByUserIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutUserByUserIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutUserByUserIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PutUserByUserIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutUserByUserIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}