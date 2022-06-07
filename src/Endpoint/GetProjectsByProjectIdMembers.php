<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetProjectsByProjectIdMembers extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Get all project member information
     *
     * @param int $projectId Relevant project ID.
     * @param array $queryParameters {
     *     @var string $entityname The entity name to search.
     * }
     */
    public function __construct(int $projectId, array $queryParameters = array())
    {
        $this->project_id = $projectId;
        $this->queryParameters = $queryParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/members');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('entityname'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('entityname', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectMemberEntity[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity[]', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}