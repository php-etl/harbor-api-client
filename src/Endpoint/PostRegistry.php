<?php

namespace Harbor\Api\Endpoint;

class PostRegistry extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for user to create a new registry.
     *
     * @param \Harbor\Api\Model\Registry $registry New created registry.
     */
    public function __construct(\Harbor\Api\Model\Registry $registry)
    {
        $this->body = $registry;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/registries';
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
     * @throws \Harbor\Api\Exception\PostRegistryBadRequestException
     * @throws \Harbor\Api\Exception\PostRegistryUnauthorizedException
     * @throws \Harbor\Api\Exception\PostRegistryConflictException
     * @throws \Harbor\Api\Exception\PostRegistryUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostRegistryInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostRegistryBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostRegistryUnauthorizedException();
        }
        if (409 === $status) {
            throw new \Harbor\Api\Exception\PostRegistryConflictException();
        }
        if (415 === $status) {
            throw new \Harbor\Api\Exception\PostRegistryUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostRegistryInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}