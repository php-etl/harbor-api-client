<?php

namespace Harbor\Api\Endpoint;

class GetRegistriesByIdNamespace extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint let user list namespaces of registry according to query.
     *
     * @param int $id The registry ID.
     * @param array $queryParameters {
     *     @var string $name The name of namespace.
     * }
     */
    public function __construct(int $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/registries/{id}/namespace');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('name'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('name', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\GetRegistriesByIdNamespaceUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdNamespaceForbiddenException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdNamespaceNotFoundException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdNamespaceInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\_Namespace[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\_Namespace[]', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetRegistriesByIdNamespaceUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetRegistriesByIdNamespaceForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetRegistriesByIdNamespaceNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetRegistriesByIdNamespaceInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}