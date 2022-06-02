<?php

namespace Harbor\Api\Endpoint;

class GetConfiguration extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/configurations';
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
     * @throws \Harbor\Api\Exception\GetConfigurationUnauthorizedException
     * @throws \Harbor\Api\Exception\GetConfigurationForbiddenException
     * @throws \Harbor\Api\Exception\GetConfigurationInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ConfigurationsResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ConfigurationsResponse', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetConfigurationUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetConfigurationForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetConfigurationInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}