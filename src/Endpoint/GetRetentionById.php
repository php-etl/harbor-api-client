<?php

namespace Harbor\Api\Endpoint;

class GetRetentionById extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Get Retention Policy.
     *
     * @param int $id Retention ID.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/retentions/{id}');
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
     * @throws \Harbor\Api\Exception\GetRetentionByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRetentionByIdForbiddenException
     * @throws \Harbor\Api\Exception\GetRetentionByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RetentionPolicy
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\RetentionPolicy', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetRetentionByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetRetentionByIdForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetRetentionByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}