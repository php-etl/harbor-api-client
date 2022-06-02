<?php

namespace Harbor\Api\Endpoint;

class PutReplicationPolicyById extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint let user update policy.
     *
     * @param int $id policy ID
     * @param \Harbor\Api\Model\ReplicationPolicy $policy The replication policy model.
     */
    public function __construct(int $id, \Harbor\Api\Model\ReplicationPolicy $policy)
    {
        $this->id = $id;
        $this->body = $policy;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/replication/policies/{id}');
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
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdForbiddenException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdNotFoundException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdConflictException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutReplicationPolicyByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutReplicationPolicyByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutReplicationPolicyByIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PutReplicationPolicyByIdNotFoundException();
        }
        if (409 === $status) {
            throw new \Harbor\Api\Exception\PutReplicationPolicyByIdConflictException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutReplicationPolicyByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}