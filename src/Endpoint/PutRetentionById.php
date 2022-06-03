<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutRetentionById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Update Retention Policy, you can reference metadatas API for the policy model.
    You can check project metadatas to find whether a retention policy is already binded.
    This method should only be called when retention policy has already binded to project.
    
    *
    * @param int $id Retention ID.
    * @param \Gyroscops\Harbor\Api\Model\RetentionPolicy $policy 
    */
    public function __construct(int $id, \Gyroscops\Harbor\Api\Model\RetentionPolicy $policy)
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
        return str_replace(array('{id}'), array($this->id), '/retentions/{id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutRetentionByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutRetentionByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutRetentionByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutRetentionByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutRetentionByIdForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutRetentionByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}