<?php

namespace Harbor\Api\Endpoint;

class GetSystemScanAllSchedule extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/system/scanAll/schedule';
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
     * @throws \Harbor\Api\Exception\GetSystemScanAllScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSystemScanAllScheduleForbiddenException
     * @throws \Harbor\Api\Exception\GetSystemScanAllScheduleInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\AdminJobSchedule
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\AdminJobSchedule', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetSystemScanAllScheduleUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetSystemScanAllScheduleForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetSystemScanAllScheduleInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}