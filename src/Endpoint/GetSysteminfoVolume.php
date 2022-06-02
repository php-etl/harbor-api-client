<?php

namespace Harbor\Api\Endpoint;

class GetSysteminfoVolume extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/systeminfo/volumes';
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
     * @throws \Harbor\Api\Exception\GetSysteminfoVolumeUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSysteminfoVolumeForbiddenException
     * @throws \Harbor\Api\Exception\GetSysteminfoVolumeInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\SystemInfo
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\SystemInfo', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetSysteminfoVolumeUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetSysteminfoVolumeForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetSysteminfoVolumeInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}