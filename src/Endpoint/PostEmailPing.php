<?php

namespace Harbor\Api\Endpoint;

class PostEmailPing extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * Test connection and authentication with email server.
     *
     * @param \Harbor\Api\Model\EmailServerSetting $settings Email server settings, if some of the settings are not assigned, they will be read from system configuration.
     */
    public function __construct(\Harbor\Api\Model\EmailServerSetting $settings)
    {
        $this->body = $settings;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/email/ping';
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
     * @throws \Harbor\Api\Exception\PostEmailPingBadRequestException
     * @throws \Harbor\Api\Exception\PostEmailPingUnauthorizedException
     * @throws \Harbor\Api\Exception\PostEmailPingForbiddenException
     * @throws \Harbor\Api\Exception\PostEmailPingUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostEmailPingInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostEmailPingBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostEmailPingUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostEmailPingForbiddenException();
        }
        if (415 === $status) {
            throw new \Harbor\Api\Exception\PostEmailPingUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostEmailPingInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}