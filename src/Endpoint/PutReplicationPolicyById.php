<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutReplicationPolicyById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint let user update policy.
     *
     * @param int $id policy ID
     * @param \Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy The replication policy model.
     */
    public function __construct(int $id, \Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy)
    {
        $this->id = $id;
        $this->body = $policy;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdForbiddenException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdConflictException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}