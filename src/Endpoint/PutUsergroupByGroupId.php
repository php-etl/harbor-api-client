<?php

namespace Harbor\Api\Endpoint;

class PutUsergroupByGroupId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $group_id;
    /**
     * Update user group information
     *
     * @param int $groupId Group ID
     * @param \Harbor\Api\Model\UserGroup $usergroup 
     */
    public function __construct(int $groupId, \Harbor\Api\Model\UserGroup $usergroup)
    {
        $this->group_id = $groupId;
        $this->body = $usergroup;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{group_id}'), array($this->group_id), '/usergroups/{group_id}');
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
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdBadRequestException
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdForbiddenException
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdNotFoundException
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutUsergroupByGroupIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutUsergroupByGroupIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutUsergroupByGroupIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PutUsergroupByGroupIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutUsergroupByGroupIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}