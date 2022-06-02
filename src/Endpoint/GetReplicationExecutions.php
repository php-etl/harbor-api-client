<?php

namespace Harbor\Api\Endpoint;

class GetReplicationExecutions extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint let user list replication executions.
     *
     * @param array $queryParameters {
     *     @var int $policy_id The policy ID.
     *     @var string $status The execution status.
     *     @var string $trigger The trigger mode.
     *     @var int $page The page.
     *     @var int $page_size The page size.
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
        return '/replication/executions';
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
        $optionsResolver->setDefined(array('policy_id', 'status', 'trigger', 'page', 'page_size'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('policy_id', array('int'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('trigger', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('page_size', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ReplicationExecution[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ReplicationExecution[]', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationExecutionsUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationExecutionsForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationExecutionsInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}