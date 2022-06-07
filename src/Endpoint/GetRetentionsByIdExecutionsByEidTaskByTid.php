<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetRetentionsByIdExecutionsByEidTaskByTid extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $eid;
    protected $tid;
    /**
     * Get Retention job task log, tags ratain or deletion detail will be shown in a table.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param int $tid Retention execution ID.
     */
    public function __construct(int $id, int $eid, int $tid)
    {
        $this->id = $id;
        $this->eid = $eid;
        $this->tid = $tid;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{eid}', '{tid}'), array($this->id, $this->eid, $this->tid), '/retentions/{id}/executions/{eid}/tasks/{tid}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}