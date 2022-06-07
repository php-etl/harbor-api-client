<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetQuotaById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
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
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Quota
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Quota', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetQuotaByIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetQuotaByIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetQuotaByIdUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetQuotaByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}