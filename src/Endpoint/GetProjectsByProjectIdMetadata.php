<?php

namespace Harbor\Api\Endpoint;

class GetProjectsByProjectIdMetadata extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint returns metadata of the project specified by project ID.
     *
     * @param int $projectId The ID of project.
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
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/metadatas');
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
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMetadataUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMetadataInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ProjectMetadata
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ProjectMetadata', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdMetadataUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdMetadataInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}