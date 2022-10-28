<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostReplicationPolicy extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    /**
     * This endpoint let user create a replication policy
     *
     * @param \Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy The policy model.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy)
    {
        $this->body = $policy;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/replication/policies';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyForbiddenException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyConflictException();
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
