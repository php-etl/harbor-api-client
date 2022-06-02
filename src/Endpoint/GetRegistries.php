<?php

namespace Harbor\Api\Endpoint;

class GetRegistries extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint let user list filtered registries by name, if name is nil, list returns all registries.
     *
     * @param array $queryParameters {
     *     @var string $name Registry's name.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/registries';
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
     * @throws \Harbor\Api\Exception\GetRegistriesUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRegistriesInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Registry[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\Registry[]', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetRegistriesUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetRegistriesInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}