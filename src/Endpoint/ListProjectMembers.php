<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class ListProjectMembers extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name_or_id;
    /**
     * Get all project member information
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $entityname The entity name to search.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     */
    public function __construct(string $projectNameOrId, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->project_name_or_id = $projectNameOrId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name_or_id}'), array($this->project_name_or_id), '/projects/{project_name_or_id}/members');
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
        $optionsResolver->setDefined(array('page', 'page_size', 'entityname'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1, 'page_size' => 10));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('page_size', array('int'));
        $optionsResolver->addAllowedTypes('entityname', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Request-Id', 'X-Is-Resource-Name'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('X-Is-Resource-Name' => false));
        $optionsResolver->addAllowedTypes('X-Request-Id', array('string'));
        $optionsResolver->addAllowedTypes('X-Is-Resource-Name', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \Gyroscops\Harbor\Api\Model\ProjectMemberEntity[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity[]', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListProjectMembersBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListProjectMembersUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListProjectMembersForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListProjectMembersNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListProjectMembersInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        throw new \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}