<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteUsergroupByGroupId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
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
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}