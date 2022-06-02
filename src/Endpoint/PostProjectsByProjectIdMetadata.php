<?php

namespace Harbor\Api\Endpoint;

class PostProjectsByProjectIdMetadata extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint is aimed to add metadata of a project.
     *
     * @param int $projectId Selected project ID.
     * @param \Harbor\Api\Model\ProjectMetadata $metadata The metadata of project.
     */
    public function __construct(int $projectId, \Harbor\Api\Model\ProjectMetadata $metadata)
    {
        $this->project_id = $projectId;
        $this->body = $metadata;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataNotFoundException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdMetadataBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdMetadataForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdMetadataNotFoundException();
        }
        if (415 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdMetadataInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}