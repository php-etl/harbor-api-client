<?php

namespace Harbor\Api\Endpoint;

class PutProjectByProjectId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint is aimed to update the properties of a project.
     *
     * @param int $projectId Selected project ID.
     * @param \Harbor\Api\Model\ProjectReq $project Updates of project.
     */
    public function __construct(int $projectId, \Harbor\Api\Model\ProjectReq $project)
    {
        $this->project_id = $projectId;
        $this->body = $project;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}');
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
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdBadRequestException
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdForbiddenException
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdNotFoundException
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutProjectByProjectIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutProjectByProjectIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutProjectByProjectIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PutProjectByProjectIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutProjectByProjectIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}