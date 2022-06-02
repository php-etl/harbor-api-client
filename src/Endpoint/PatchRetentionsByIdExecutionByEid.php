<?php

namespace Harbor\Api\Endpoint;

class PatchRetentionsByIdExecutionByEid extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $eid;
    /**
     * Stop a Retention job, only support "stop" action now.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param \Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $action The action, only support "stop" now.
     */
    public function __construct(int $id, int $eid, \Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $action)
    {
        $this->id = $id;
        $this->eid = $eid;
        $this->body = $action;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{eid}'), array($this->id, $this->eid), '/retentions/{id}/executions/{eid}');
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
     * @throws \Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidUnauthorizedException
     * @throws \Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidForbiddenException
     * @throws \Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}