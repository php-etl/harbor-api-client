<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetSystemGc extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/system/gc';
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\GCResult[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\GCResult[]', 'json');
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetSystemGcForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetSystemGcUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetSystemGcInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}