<?php

namespace Harbor\Api\Endpoint;

class DeleteUsergroupByGroupId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $group_id;
    /**
     * Delete user group
     *
     * @param int $groupId 
     */
    public function __construct(int $groupId)
    {
        $this->group_id = $groupId;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{group_id}'), array($this->group_id), '/usergroups/{group_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\DeleteUsergroupByGroupIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteUsergroupByGroupIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteUsergroupByGroupIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteUsergroupByGroupIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\DeleteUsergroupByGroupIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\DeleteUsergroupByGroupIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\DeleteUsergroupByGroupIdForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\DeleteUsergroupByGroupIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}