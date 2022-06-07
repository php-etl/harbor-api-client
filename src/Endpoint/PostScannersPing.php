<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostScannersPing extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * Pings scanner adapter to test endpoint URL and authorization settings.
     *
     * @param \Gyroscops\Harbor\Api\Model\ScannerRegistrationSettings $settings A scanner registration settings to be tested.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\ScannerRegistrationSettings $settings)
    {
        $this->body = $settings;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/scanners/ping';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannersPingForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannersPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannersPingInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannersPingBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostScannersPingForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostScannersPingUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostScannersPingInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostScannersPingBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}