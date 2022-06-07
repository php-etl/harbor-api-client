<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteProjectsByProjectIdMetadataByMetaName extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
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
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}