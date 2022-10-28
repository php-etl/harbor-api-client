<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetProjectsByProjectIdMemberByMid extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{project_id}', '{mid}'), array($this->project_id, $this->mid), '/projects/{project_id}/members/{mid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectMemberEntity
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidNotFoundException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
