<?php

namespace Harbor\Api\Endpoint;

class PostReplicationExecution extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for user to start one execution of the replication.
     *
     * @param \Harbor\Api\Model\ReplicationExecution $execution The execution that needs to be started, only the property "policy_id" is needed.
     */
    public function __construct(\Harbor\Api\Model\ReplicationExecution $execution)
    {
        $this->body = $execution;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/replication/executions';
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
     * @throws \Harbor\Api\Exception\PostReplicationExecutionBadRequestException
     * @throws \Harbor\Api\Exception\PostReplicationExecutionUnauthorizedException
     * @throws \Harbor\Api\Exception\PostReplicationExecutionForbiddenException
     * @throws \Harbor\Api\Exception\PostReplicationExecutionUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostReplicationExecutionInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostReplicationExecutionBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostReplicationExecutionUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostReplicationExecutionForbiddenException();
        }
        if (415 === $status) {
            throw new \Harbor\Api\Exception\PostReplicationExecutionUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostReplicationExecutionInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}