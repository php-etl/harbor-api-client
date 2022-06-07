<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetReplicationPolicyById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint let user get replication policy by specific ID.
     *
     * @param int $id policy ID
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
        return str_replace(array('{id}'), array($this->id), '/replication/policies/{id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationPolicy
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ReplicationPolicy', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}