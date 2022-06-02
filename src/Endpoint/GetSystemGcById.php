<?php

namespace Harbor\Api\Endpoint;

class GetSystemGcById extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint let user get gc status filtered by specific ID.
     *
     * @param int $id Relevant job ID
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
        return str_replace(array('{id}'), array($this->id), '/system/gc/{id}');
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
     * @throws \Harbor\Api\Exception\GetSystemGcByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSystemGcByIdForbiddenException
     * @throws \Harbor\Api\Exception\GetSystemGcByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\GCResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\GCResult', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetSystemGcByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetSystemGcByIdForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetSystemGcByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}