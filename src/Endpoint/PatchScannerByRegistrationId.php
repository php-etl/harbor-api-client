<?php

namespace Harbor\Api\Endpoint;

class PatchScannerByRegistrationId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $registration_id;
    /**
     * Set the specified scanner registration as the system default one.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param \Harbor\Api\Model\IsDefault $payload 
     */
    public function __construct(string $registrationId, \Harbor\Api\Model\IsDefault $payload)
    {
        $this->registration_id = $registrationId;
        $this->body = $payload;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{registration_id}'), array($this->registration_id), '/scanners/{registration_id}');
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
     * @throws \Harbor\Api\Exception\PatchScannerByRegistrationIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PatchScannerByRegistrationIdForbiddenException
     * @throws \Harbor\Api\Exception\PatchScannerByRegistrationIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PatchScannerByRegistrationIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PatchScannerByRegistrationIdForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PatchScannerByRegistrationIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}