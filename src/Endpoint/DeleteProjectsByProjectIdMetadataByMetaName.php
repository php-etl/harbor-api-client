<?php

namespace Harbor\Api\Endpoint;

class DeleteProjectsByProjectIdMetadataByMetaName extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $meta_name;
    /**
     * This endpoint is aimed to delete metadata of a project.
     *
     * @param int $projectId The ID of project.
     * @param string $metaName The name of metadat.
     */
    public function __construct(int $projectId, string $metaName)
    {
        $this->project_id = $projectId;
        $this->meta_name = $metaName;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{meta_name}'), array($this->project_id, $this->meta_name), '/projects/{project_id}/metadatas/{meta_name}');
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
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameBadRequestException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameNotFoundException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameBadRequestException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}