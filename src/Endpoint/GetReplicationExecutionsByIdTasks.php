<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetReplicationExecutionsByIdTasks extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint is for user to get the task list of one execution.
     *
     * @param int $id The execution ID.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/replication/executions/{id}/tasks');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationTask[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ReplicationTask[]', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}