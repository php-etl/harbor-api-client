<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostUser extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is to create a user if the user does not already exist.
     *
     * @param \Gyroscops\Harbor\Api\Model\User $user New created user.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\User $user)
    {
        $this->body = $user;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostUserUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUserForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUserInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUserBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostUserUnsupportedMediaTypeException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostUserForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostUserInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostUserBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}