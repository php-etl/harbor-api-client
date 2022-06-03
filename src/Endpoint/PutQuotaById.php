<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutQuotaById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Update hard limits of the specified quota
     *
     * @param int $id Quota ID
     * @param \Gyroscops\Harbor\Api\Model\QuotaUpdateReq $hard The new hard limits for the quota
     */
    public function __construct(int $id, \Gyroscops\Harbor\Api\Model\QuotaUpdateReq $hard)
    {
        $this->id = $id;
        $this->body = $hard;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/quotas/{id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutQuotaByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutQuotaByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutQuotaByIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutQuotaByIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutQuotaByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}