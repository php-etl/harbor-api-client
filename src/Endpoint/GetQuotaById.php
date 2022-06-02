<?php

namespace Harbor\Api\Endpoint;

class GetQuotaById extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Get the specified quota
     *
     * @param int $id Quota ID
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
        return str_replace(array('{id}'), array($this->id), '/quotas/{id}');
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
     * @throws \Harbor\Api\Exception\GetQuotaByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetQuotaByIdForbiddenException
     * @throws \Harbor\Api\Exception\GetQuotaByIdNotFoundException
     * @throws \Harbor\Api\Exception\GetQuotaByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Quota
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\Quota', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetQuotaByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetQuotaByIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetQuotaByIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetQuotaByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}