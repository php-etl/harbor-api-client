<?php

namespace Harbor\Api\Endpoint;

class GetScansScheduleMetric extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/scans/schedule/metrics';
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
     * @throws \Harbor\Api\Exception\GetScansScheduleMetricUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScansScheduleMetricForbiddenException
     * @throws \Harbor\Api\Exception\GetScansScheduleMetricInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Stats
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\Stats', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetScansScheduleMetricUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetScansScheduleMetricForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetScansScheduleMetricInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}