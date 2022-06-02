<?php

namespace Harbor\Api\Endpoint;

class PostUser extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is to create a user if the user does not already exist.
     *
     * @param \Harbor\Api\Model\User $user New created user.
     */
    public function __construct(\Harbor\Api\Model\User $user)
    {
        $this->body = $user;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/users';
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
     * @throws \Harbor\Api\Exception\PostUserBadRequestException
     * @throws \Harbor\Api\Exception\PostUserForbiddenException
     * @throws \Harbor\Api\Exception\PostUserUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostUserInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostUserBadRequestException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostUserForbiddenException();
        }
        if (415 === $status) {
            throw new \Harbor\Api\Exception\PostUserUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostUserInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}