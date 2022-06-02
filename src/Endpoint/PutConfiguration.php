<?php

namespace Harbor\Api\Endpoint;

class PutConfiguration extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for modifying system configurations that only provides for admin user.
     *
     * @param \Harbor\Api\Model\Configurations $configurations The configuration map can contain a subset of the attributes of the schema, which are to be updated.
     */
    public function __construct(\Harbor\Api\Model\Configurations $configurations)
    {
        $this->body = $configurations;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Harbor\Api\Exception\PutConfigurationUnauthorizedException
     * @throws \Harbor\Api\Exception\PutConfigurationForbiddenException
     * @throws \Harbor\Api\Exception\PutConfigurationInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutConfigurationUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutConfigurationForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutConfigurationInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}