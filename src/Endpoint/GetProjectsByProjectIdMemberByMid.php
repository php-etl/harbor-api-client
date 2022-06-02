<?php

namespace Harbor\Api\Endpoint;

class GetProjectsByProjectIdMemberByMid extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $mid;
    /**
     * Get the project member information
     *
     * @param int $projectId Relevant project ID.
     * @param int $mid The member ID
     */
    public function __construct(int $projectId, int $mid)
    {
        $this->project_id = $projectId;
        $this->mid = $mid;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{mid}'), array($this->project_id, $this->mid), '/projects/{project_id}/members/{mid}');
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
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ProjectMemberEntity
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\ProjectMemberEntity', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}