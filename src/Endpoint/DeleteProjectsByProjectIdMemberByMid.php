<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteProjectsByProjectIdMemberByMid extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'DELETE';
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
