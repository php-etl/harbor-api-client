<?php

namespace Harbor\Api\Endpoint;

class DeleteProjectByProjectId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint is aimed to delete project by project ID.
     *
     * @param int $projectId Project ID of project which will be deleted.
     */
    public function __construct(int $projectId)
    {
        $this->project_id = $projectId;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
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
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdPreconditionFailedException
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectByProjectIdBadRequestException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectByProjectIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectByProjectIdNotFoundException();
        }
        if (412 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectByProjectIdPreconditionFailedException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectByProjectIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}