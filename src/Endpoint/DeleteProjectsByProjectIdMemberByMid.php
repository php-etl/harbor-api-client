<?php

namespace Harbor\Api\Endpoint;

class DeleteProjectsByProjectIdMemberByMid extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $mid;
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $mid Member ID.
     */
    public function __construct(int $projectId, int $mid)
    {
        $this->project_id = $projectId;
        $this->mid = $mid;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
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
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}