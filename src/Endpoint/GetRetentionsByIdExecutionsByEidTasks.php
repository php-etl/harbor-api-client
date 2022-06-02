<?php

namespace Harbor\Api\Endpoint;

class GetRetentionsByIdExecutionsByEidTasks extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $eid;
    /**
     * Get Retention job tasks, each repository as a task.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     */
    public function __construct(int $id, int $eid)
    {
        $this->id = $id;
        $this->eid = $eid;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{eid}'), array($this->id, $this->eid), '/retentions/{id}/executions/{eid}/tasks');
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
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksForbiddenException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RetentionExecutionTask[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\RetentionExecutionTask[]', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}