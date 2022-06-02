<?php

namespace Harbor\Api\Endpoint;

class GetScannersByRegistrationIdMetadata extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $registration_id;
    /**
     * Get the metadata of the specified scanner registration, including the capabilities and customzied properties.
     *
     * @param string $registrationId The scanner registration identifier.
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
        return str_replace(array('{registration_id}'), array($this->registration_id), '/scanners/{registration_id}/metadata');
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
     * @throws \Harbor\Api\Exception\GetScannersByRegistrationIdMetadataUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScannersByRegistrationIdMetadataForbiddenException
     * @throws \Harbor\Api\Exception\GetScannersByRegistrationIdMetadataInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerAdapterMetadata
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ScannerAdapterMetadata', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetScannersByRegistrationIdMetadataUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetScannersByRegistrationIdMetadataForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetScannersByRegistrationIdMetadataInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}