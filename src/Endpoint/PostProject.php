<?php

namespace Harbor\Api\Endpoint;

class PostProject extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for user to create a new project.
     *
     * @param \Harbor\Api\Model\ProjectReq $project New created project.
     */
    public function __construct(\Harbor\Api\Model\ProjectReq $project)
    {
        $this->body = $project;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/projects';
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
     * @throws \Harbor\Api\Exception\PostProjectBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectConflictException
     * @throws \Harbor\Api\Exception\PostProjectUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostProjectInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostProjectBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostProjectUnauthorizedException();
        }
        if (409 === $status) {
            throw new \Harbor\Api\Exception\PostProjectConflictException();
        }
        if (415 === $status) {
            throw new \Harbor\Api\Exception\PostProjectUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostProjectInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}