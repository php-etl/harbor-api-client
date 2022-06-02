<?php

namespace Harbor\Api\Endpoint;

class PostRegistriesPing extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint checks status of a registry, the registry can be given by ID or URL (together with credential)
     *
     * @param \Harbor\Api\Model\Registry $registry Registry to ping.
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
     * @throws \Harbor\Api\Exception\PostRegistriesPingBadRequestException
     * @throws \Harbor\Api\Exception\PostRegistriesPingUnauthorizedException
     * @throws \Harbor\Api\Exception\PostRegistriesPingNotFoundException
     * @throws \Harbor\Api\Exception\PostRegistriesPingUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostRegistriesPingInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostRegistriesPingBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostRegistriesPingUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PostRegistriesPingNotFoundException();
        }
        if (415 === $status) {
            throw new \Harbor\Api\Exception\PostRegistriesPingUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostRegistriesPingInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}