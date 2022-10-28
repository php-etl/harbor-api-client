<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostEmailPing extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    /**
     * Test connection and authentication with email server.
     *
     * @param \Gyroscops\Harbor\Api\Model\EmailServerSetting $settings Email server settings, if some of the settings are not assigned, they will be read from system configuration.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\EmailServerSetting $settings)
    {
        $this->body = $settings;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/email/ping';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostEmailPingBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostEmailPingUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostEmailPingForbiddenException();
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostEmailPingUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostEmailPingInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
