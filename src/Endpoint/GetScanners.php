<?php

namespace Harbor\Api\Endpoint;

class GetScanners extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/scanners';
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
     * @throws \Harbor\Api\Exception\GetScannersBadRequestException
     * @throws \Harbor\Api\Exception\GetScannersUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScannersForbiddenException
     * @throws \Harbor\Api\Exception\GetScannersInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerRegistration[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ScannerRegistration[]', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\GetScannersBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetScannersUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetScannersForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetScannersInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}