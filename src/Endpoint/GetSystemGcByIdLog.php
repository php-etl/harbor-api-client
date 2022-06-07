<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetSystemGcByIdLog extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint let user get gc job logs filtered by specific ID.
     *
     * @param int $id Relevant job ID
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
        return str_replace(array('{id}'), array($this->id), '/system/gc/{id}/log');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}