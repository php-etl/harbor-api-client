<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostProjectsByProjectIdMetadata extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint is aimed to add metadata of a project.
     *
     * @param int $projectId Selected project ID.
     * @param \Gyroscops\Harbor\Api\Model\ProjectMetadata $metadata The metadata of project.
     */
    public function __construct(int $projectId, \Gyroscops\Harbor\Api\Model\ProjectMetadata $metadata)
    {
        $this->project_id = $projectId;
        $this->body = $metadata;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/metadatas');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnauthorizedException();
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnsupportedMediaTypeException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}