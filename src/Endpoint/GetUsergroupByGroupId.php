<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetUsergroupByGroupId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $group_id;
    /**
     * Get user group information
     *
     * @param int $groupId Group ID
     */
    public function __construct(int $groupId)
    {
        $this->group_id = $groupId;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserGroup
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\UserGroup', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}