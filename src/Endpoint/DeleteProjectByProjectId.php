<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteProjectByProjectId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdBadRequestException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdNotFoundException();
        }
        if (412 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdPreconditionFailedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
