<?php

namespace Harbor\Api\Endpoint;

class PutRegistryById extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint is for update a given registry.
     *
     * @param int $id The registry's ID.
     * @param \Harbor\Api\Model\PutRegistry $repoTarget Updates registry.
     */
    public function __construct(int $id, \Harbor\Api\Model\PutRegistry $repoTarget)
    {
        $this->id = $id;
        $this->body = $repoTarget;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/registries/{id}');
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
     * @throws \Harbor\Api\Exception\PutRegistryByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutRegistryByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutRegistryByIdNotFoundException
     * @throws \Harbor\Api\Exception\PutRegistryByIdConflictException
     * @throws \Harbor\Api\Exception\PutRegistryByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutRegistryByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutRegistryByIdUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PutRegistryByIdNotFoundException();
        }
        if (409 === $status) {
            throw new \Harbor\Api\Exception\PutRegistryByIdConflictException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutRegistryByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}