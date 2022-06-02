<?php

namespace Harbor\Api\Endpoint;

class GetProjectByProjectId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint returns specific project information by project ID.
     *
     * @param int $projectId Project ID for filtering results.
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
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}');
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
     * @throws \Harbor\Api\Exception\GetProjectByProjectIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectByProjectIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Project
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\Project', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetProjectByProjectIdUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetProjectByProjectIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}