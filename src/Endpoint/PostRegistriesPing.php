<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostRegistriesPing extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint checks status of a registry, the registry can be given by ID or URL (together with credential)
     *
     * @param \Gyroscops\Harbor\Api\Model\Registry $registry Registry to ping.
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
        return '/registries/ping';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistriesPingBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistriesPingUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistriesPingNotFoundException();
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistriesPingUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRegistriesPingInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}