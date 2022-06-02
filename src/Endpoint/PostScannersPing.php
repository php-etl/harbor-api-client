<?php

namespace Harbor\Api\Endpoint;

class PostScannersPing extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * Pings scanner adapter to test endpoint URL and authorization settings.
     *
     * @param \Harbor\Api\Model\ScannerRegistrationSettings $settings A scanner registration settings to be tested.
     */
    public function __construct(\Harbor\Api\Model\ScannerRegistrationSettings $settings)
    {
        $this->body = $settings;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Harbor\Api\Exception\PostScannersPingBadRequestException
     * @throws \Harbor\Api\Exception\PostScannersPingUnauthorizedException
     * @throws \Harbor\Api\Exception\PostScannersPingForbiddenException
     * @throws \Harbor\Api\Exception\PostScannersPingInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostScannersPingBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostScannersPingUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostScannersPingForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostScannersPingInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}