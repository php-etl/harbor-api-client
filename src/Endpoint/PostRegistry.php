<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostRegistry extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for user to create a new registry.
     *
     * @param \Gyroscops\Harbor\Api\Model\Registry $registry New created registry.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\Registry $registry)
    {
        $this->body = $registry;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryConflictException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistryUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistryInternalServerErrorException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistryUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistryBadRequestException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistryConflictException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}