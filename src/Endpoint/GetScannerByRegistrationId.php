<?php

namespace Harbor\Api\Endpoint;

class GetScannerByRegistrationId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $registration_id;
    /**
     * Retruns the details of the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifer.
     */
    public function __construct(string $registrationId)
    {
        $this->registration_id = $registrationId;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{registration_id}'), array($this->registration_id), '/scanners/{registration_id}');
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
     * @throws \Harbor\Api\Exception\GetScannerByRegistrationIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScannerByRegistrationIdForbiddenException
     * @throws \Harbor\Api\Exception\GetScannerByRegistrationIdNotFoundException
     * @throws \Harbor\Api\Exception\GetScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerRegistration
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ScannerRegistration', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetScannerByRegistrationIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetScannerByRegistrationIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetScannerByRegistrationIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetScannerByRegistrationIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}