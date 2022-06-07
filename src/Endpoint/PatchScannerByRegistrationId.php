<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PatchScannerByRegistrationId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $registration_id;
    /**
     * Set the specified scanner registration as the system default one.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param \Gyroscops\Harbor\Api\Model\IsDefault $payload 
     */
    public function __construct(string $registrationId, \Gyroscops\Harbor\Api\Model\IsDefault $payload)
    {
        $this->registration_id = $registrationId;
        $this->body = $payload;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\PatchScannerByRegistrationIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PatchScannerByRegistrationIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PatchScannerByRegistrationIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PatchScannerByRegistrationIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PatchScannerByRegistrationIdUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PatchScannerByRegistrationIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}