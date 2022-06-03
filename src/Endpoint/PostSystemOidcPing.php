<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostSystemOidcPing extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * Test the OIDC endpoint, the setting of the endpoint is provided in the request.  This API can only be called by system admin.
     *
     * @param \Gyroscops\Harbor\Api\Model\SystemOidcPingPostBody $endpoint Request body for OIDC endpoint to be tested.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\SystemOidcPingPostBody $endpoint)
    {
        $this->body = $endpoint;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/system/oidc/ping';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemOidcPingBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemOidcPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemOidcPingForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemOidcPingBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemOidcPingUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemOidcPingForbiddenException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}