<?php

namespace Harbor\Api\Endpoint;

class GetQuotas extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
    * List quotas
    *
    * @param array $queryParameters {
    *     @var string $reference The reference type of quota.
    *     @var string $reference_id The reference id of quota.
    *     @var string $sort Sort method, valid values include:
    'hard.resource_name', '-hard.resource_name', 'used.resource_name', '-used.resource_name'.
    Here '-' stands for descending order, resource_name should be the real resource name of the quota.
    
    *     @var int $page The page number, default is 1.
    *     @var int $page_size The size of per page, default is 10, maximum is 100.
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
        return '/quotas';
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
        $optionsResolver->setDefined(array('reference', 'reference_id', 'sort', 'page', 'page_size'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('reference', array('string'));
        $optionsResolver->setAllowedTypes('reference_id', array('string'));
        $optionsResolver->setAllowedTypes('sort', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('page_size', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\GetQuotasUnauthorizedException
     * @throws \Harbor\Api\Exception\GetQuotasForbiddenException
     * @throws \Harbor\Api\Exception\GetQuotasInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Quota[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\Quota[]', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetQuotasUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetQuotasForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetQuotasInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}