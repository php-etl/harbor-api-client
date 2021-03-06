<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetReplicationExecutionsByIdTasksByTaskIdLog extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $task_id;
    /**
     * This endpoint is for user to get the log of one task.
     *
     * @param int $id The execution ID.
     * @param int $taskId The task ID.
     */
    public function __construct(int $id, int $taskId)
    {
        $this->id = $id;
        $this->task_id = $taskId;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{task_id}'), array($this->id, $this->task_id), '/replication/executions/{id}/tasks/{task_id}/log');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}