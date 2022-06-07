<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteScannerByRegistrationId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $registration_id;
    /**
     * Deletes the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifier.
     */
    public function __construct(string $registrationId)
    {
        $this->registration_id = $registrationId;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ScannerRegistration', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}