<?php

namespace Harbor\Api\Endpoint;

class GetProjectsByProjectIdScanner extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Get the scanner registration of the specified project. If no scanner registration is configured for the specified project, the system default scanner registration will be returned.
     *
     * @param int $projectId The project identifier.
     */
    public function __construct(int $projectId)
    {
        $this->project_id = $projectId;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/scanner');
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
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerRegistration
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ScannerRegistration', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdScannerBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdScannerUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdScannerForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdScannerNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdScannerInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}