<?php

namespace Harbor\Api\Endpoint;

class GetProjectsByProjectIdSummary extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Get summary of the project.
     *
     * @param int $projectId Relevant project ID
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
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/summary');
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
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ProjectSummary
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ProjectSummary', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdSummaryBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdSummaryUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdSummaryForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdSummaryNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdSummaryInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}