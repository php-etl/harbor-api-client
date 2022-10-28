<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetProjectsByProjectIdScanner extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/scanner');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ScannerRegistration', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerNotFoundException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
