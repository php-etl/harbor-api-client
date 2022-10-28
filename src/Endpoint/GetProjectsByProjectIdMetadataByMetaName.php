<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetProjectsByProjectIdMetadataByMetaName extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $project_id;
    protected $meta_name;
    /**
     * This endpoint returns specified metadata of a project.
     *
     * @param int $projectId Project ID for filtering results.
     * @param string $metaName The name of metadat.
     */
    public function __construct(int $projectId, string $metaName)
    {
        $this->project_id = $projectId;
        $this->meta_name = $metaName;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{project_id}', '{meta_name}'), array($this->project_id, $this->meta_name), '/projects/{project_id}/metadatas/{meta_name}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMetadataByMetaNameUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMetadataByMetaNameInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectMetadata
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata', 'json');
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMetadataByMetaNameUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMetadataByMetaNameInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
