<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetUsergroups extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/usergroups';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserGroup[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\UserGroup[]', 'json');
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsergroupsUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsergroupsForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsergroupsInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
