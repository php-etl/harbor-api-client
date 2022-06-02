<?php

namespace Harbor\Api\Endpoint;

class GetProjectsByProjectIdScannerCandidates extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Retrieve the system configured scanner registrations as candidates of setting project level scanner.
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
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/scanner/candidates');
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
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerRegistration[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ScannerRegistration[]', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}