<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class UpdateConfigurations extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for modifying system configurations that only provides for admin user.
     *
     * @param \Gyroscops\Harbor\Api\Model\Configurations $configurations The configuration map can contain a subset of the attributes of the schema, which are to be updated.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\Configurations $configurations, array $headerParameters = array())
    {
        $this->body = $configurations;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/configurations';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Request-Id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateConfigurationsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateConfigurationsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateConfigurationsInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateConfigurationsUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateConfigurationsForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateConfigurationsInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}