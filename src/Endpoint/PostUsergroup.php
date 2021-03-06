<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostUsergroup extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * Create user group information
     *
     * @param \Gyroscops\Harbor\Api\Model\UserGroup $usergroup 
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\UserGroup $usergroup)
    {
        $this->body = $usergroup;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/usergroups';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupConflictException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostUsergroupForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostUsergroupInternalServerErrorException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostUsergroupUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostUsergroupBadRequestException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostUsergroupConflictException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}