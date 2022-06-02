<?php

namespace Harbor\Api\Endpoint;

class PutScannerByRegistrationId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $registration_id;
    /**
     * Updates the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param \Harbor\Api\Model\ScannerRegistrationReq $registration A scanner registraiton to be updated.
     */
    public function __construct(string $registrationId, \Harbor\Api\Model\ScannerRegistrationReq $registration)
    {
        $this->registration_id = $registrationId;
        $this->body = $registration;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
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
     * @throws \Harbor\Api\Exception\PutScannerByRegistrationIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutScannerByRegistrationIdForbiddenException
     * @throws \Harbor\Api\Exception\PutScannerByRegistrationIdNotFoundException
     * @throws \Harbor\Api\Exception\PutScannerByRegistrationIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutScannerByRegistrationIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutScannerByRegistrationIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PutScannerByRegistrationIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutScannerByRegistrationIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}