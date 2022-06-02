<?php

namespace Harbor\Api\Endpoint;

class GetStatistic extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/statistics';
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
     * @throws \Harbor\Api\Exception\GetStatisticUnauthorizedException
     * @throws \Harbor\Api\Exception\GetStatisticInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\StatisticMap
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\StatisticMap', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetStatisticUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetStatisticInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}