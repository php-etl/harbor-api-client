<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostProject extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    /**
     * This endpoint is for user to create a new project.
     *
     * @param \Gyroscops\Harbor\Api\Model\ProjectReq $project New created project.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\ProjectReq $project)
    {
        $this->body = $project;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/projects';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectUnauthorizedException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectConflictException();
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
