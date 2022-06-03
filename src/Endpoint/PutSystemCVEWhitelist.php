<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutSystemCVEWhitelist extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This API overwrites the system level whitelist of CVE with the list in request body.  Only system Admin has permission to call this API.
     *
     * @param \Gyroscops\Harbor\Api\Model\CVEWhitelist $whitelist The whitelist with new content
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\CVEWhitelist $whitelist)
    {
        $this->body = $whitelist;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/system/CVEWhitelist';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemCVEWhitelistUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemCVEWhitelistForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemCVEWhitelistInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutSystemCVEWhitelistUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutSystemCVEWhitelistForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutSystemCVEWhitelistInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}