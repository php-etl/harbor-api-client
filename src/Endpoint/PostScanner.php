<?php

namespace Harbor\Api\Endpoint;

class PostScanner extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * Creats a new scanner registration with the given data.
     *
     * @param \Harbor\Api\Model\ScannerRegistrationReq $registration A scanner registration to be created.
     */
    public function __construct(\Harbor\Api\Model\ScannerRegistrationReq $registration)
    {
        $this->body = $registration;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/scanners';
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
     * @throws \Harbor\Api\Exception\PostScannerBadRequestException
     * @throws \Harbor\Api\Exception\PostScannerUnauthorizedException
     * @throws \Harbor\Api\Exception\PostScannerForbiddenException
     * @throws \Harbor\Api\Exception\PostScannerInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostScannerBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostScannerUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostScannerForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostScannerInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}