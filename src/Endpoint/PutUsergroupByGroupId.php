<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutUsergroupByGroupId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $group_id;
    /**
     * Update user group information
     *
     * @param int $groupId Group ID
     * @param \Gyroscops\Harbor\Api\Model\UserGroup $usergroup 
     */
    public function __construct(int $groupId, \Gyroscops\Harbor\Api\Model\UserGroup $usergroup)
    {
        $this->group_id = $groupId;
        $this->body = $usergroup;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}