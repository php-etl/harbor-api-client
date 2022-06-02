<?php

namespace Harbor\Api\Endpoint;

class GetReplicationAdapters extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/replication/adapters';
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
     * @throws \Harbor\Api\Exception\GetReplicationAdaptersUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationAdaptersForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationAdaptersInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationAdaptersUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationAdaptersForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationAdaptersInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}