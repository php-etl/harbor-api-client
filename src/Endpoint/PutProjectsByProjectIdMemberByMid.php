<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutProjectsByProjectIdMemberByMid extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $mid;
    /**
     * Update project member relationship
     *
     * @param int $projectId Relevant project ID.
     * @param int $mid Member ID.
     * @param \Gyroscops\Harbor\Api\Model\RoleRequest $role 
     */
    public function __construct(int $projectId, int $mid, \Gyroscops\Harbor\Api\Model\RoleRequest $role)
    {
        $this->project_id = $projectId;
        $this->mid = $mid;
        $this->body = $role;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{mid}'), array($this->project_id, $this->mid), '/projects/{project_id}/members/{mid}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidNotFoundException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}