<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteRegistryById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint is for to delete specific registry.
     *
     * @param int $id The registry's ID.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/registries/{id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdNotFoundException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}