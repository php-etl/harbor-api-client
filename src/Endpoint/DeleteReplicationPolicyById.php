<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteReplicationPolicyById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Delete the replication policy specified by ID.
     *
     * @param int $id Replication policy ID
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdForbiddenException();
        }
        if (412 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdPreconditionFailedException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}