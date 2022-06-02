<?php

namespace Harbor\Api\Endpoint;

class GetReplicationPolicies extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint let user list replication policies
     *
     * @param array $queryParameters {
     *     @var string $name The replication policy name.
     *     @var int $page The page nubmer.
     *     @var int $page_size The size of per page.
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
        return '/replication/policies';
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
        $optionsResolver->setDefined(array('name', 'page', 'page_size'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('page_size', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\GetReplicationPoliciesBadRequestException
     * @throws \Harbor\Api\Exception\GetReplicationPoliciesUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationPoliciesForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationPoliciesInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ReplicationPolicy[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ReplicationPolicy[]', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationPoliciesBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationPoliciesUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationPoliciesForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationPoliciesInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}