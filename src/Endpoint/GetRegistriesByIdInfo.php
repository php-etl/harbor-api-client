<?php

namespace Harbor\Api\Endpoint;

class GetRegistriesByIdInfo extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Get the info of one specific registry.
     *
     * @param int $id The registry ID.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/registries/{id}/info');
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
     * @throws \Harbor\Api\Exception\GetRegistriesByIdInfoUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdInfoNotFoundException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdInfoInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RegistryInfo
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\RegistryInfo', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetRegistriesByIdInfoUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetRegistriesByIdInfoNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetRegistriesByIdInfoInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}