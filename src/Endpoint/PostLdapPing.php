<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostLdapPing extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    /**
     * This endpoint ping the available ldap service for test related configuration parameters.
     *
     * @param \Gyroscops\Harbor\Api\Model\LdapConf $ldapconf ldap configuration. support input ldap service configuration. If it's a empty request, will load current configuration from the system.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\LdapConf $ldapconf)
    {
        $this->body = $ldapconf;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/ldap/ping';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLdapPingBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLdapPingUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLdapPingForbiddenException();
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLdapPingUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLdapPingInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
