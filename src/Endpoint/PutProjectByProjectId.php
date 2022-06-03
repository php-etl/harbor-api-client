<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutProjectByProjectId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint is aimed to update the properties of a project.
     *
     * @param int $projectId Selected project ID.
     * @param \Gyroscops\Harbor\Api\Model\ProjectReq $project Updates of project.
     */
    public function __construct(int $projectId, \Gyroscops\Harbor\Api\Model\ProjectReq $project)
    {
        $this->project_id = $projectId;
        $this->body = $project;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}