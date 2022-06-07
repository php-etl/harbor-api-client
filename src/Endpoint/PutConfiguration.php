<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutConfiguration extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for modifying system configurations that only provides for admin user.
     *
     * @param \Gyroscops\Harbor\Api\Model\Configurations $configurations The configuration map can contain a subset of the attributes of the schema, which are to be updated.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\Configurations $configurations)
    {
        $this->body = $configurations;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/configurations';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutConfigurationForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutConfigurationUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutConfigurationInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutConfigurationForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutConfigurationUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutConfigurationInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}