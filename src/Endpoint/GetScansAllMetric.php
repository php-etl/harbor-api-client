<?php

namespace Harbor\Api\Endpoint;

class GetScansAllMetric extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/scans/all/metrics';
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
     * @throws \Harbor\Api\Exception\GetScansAllMetricUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScansAllMetricForbiddenException
     * @throws \Harbor\Api\Exception\GetScansAllMetricInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Stats
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\Stats', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetScansAllMetricUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetScansAllMetricForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetScansAllMetricInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}