<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostProjectsByProjectIdMember extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $project_id;
    /**
     * Create project member relationship, the member can be one of the user_member and group_member,  The user_member need to specify user_id or username. If the user already exist in harbor DB, specify the user_id,  If does not exist in harbor DB, it will SearchAndOnBoard the user. The group_member need to specify id or ldap_group_dn. If the group already exist in harbor DB. specify the user group's id,  If does not exist, it will SearchAndOnBoard the group.
     *
     * @param int $projectId Relevant project ID.
     * @param \Gyroscops\Harbor\Api\Model\ProjectMember $projectMember
     */
    public function __construct(int $projectId, \Gyroscops\Harbor\Api\Model\ProjectMember $projectMember)
    {
        $this->project_id = $projectId;
        $this->body = $projectMember;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/members');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberForbiddenException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberConflictException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
