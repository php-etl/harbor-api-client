<?php

namespace Harbor\Api\Endpoint;

class PostUsergroup extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * Create user group information
     *
     * @param \Harbor\Api\Model\UserGroup $usergroup 
     */
    public function __construct(\Harbor\Api\Model\UserGroup $usergroup)
    {
        $this->body = $usergroup;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Harbor\Api\Exception\PostUsergroupBadRequestException
     * @throws \Harbor\Api\Exception\PostUsergroupUnauthorizedException
     * @throws \Harbor\Api\Exception\PostUsergroupForbiddenException
     * @throws \Harbor\Api\Exception\PostUsergroupConflictException
     * @throws \Harbor\Api\Exception\PostUsergroupInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostUsergroupBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostUsergroupUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostUsergroupForbiddenException();
        }
        if (409 === $status) {
            throw new \Harbor\Api\Exception\PostUsergroupConflictException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostUsergroupInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}