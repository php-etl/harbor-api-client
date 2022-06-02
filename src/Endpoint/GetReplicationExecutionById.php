<?php

namespace Harbor\Api\Endpoint;

class GetReplicationExecutionById extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint is for user to get one execution of the replication.
     *
     * @param int $id The execution ID.
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
        return str_replace(array('{id}'), array($this->id), '/replication/executions/{id}');
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
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdBadRequestException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdNotFoundException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ReplicationExecution
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ReplicationExecution', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationExecutionByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationExecutionByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationExecutionByIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationExecutionByIdNotFoundException();
        }
        if (415 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationExecutionByIdUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetReplicationExecutionByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}