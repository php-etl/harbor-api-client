<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostRetention extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
    * Create Retention Policy, you can reference metadatas API for the policy model.
    You can check project metadatas to find whether a retention policy is already binded.
    This method should only be called when no retention policy binded to project yet.
    
    *
    * @param \Gyroscops\Harbor\Api\Model\RetentionPolicy $policy Create Retention Policy successfully.
    */
    public function __construct(\Gyroscops\Harbor\Api\Model\RetentionPolicy $policy)
    {
        $this->body = $policy;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/retentions';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRetentionForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRetentionUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRetentionInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRetentionBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}