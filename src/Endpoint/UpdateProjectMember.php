<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class UpdateProjectMember extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name_or_id;
    protected $mid;
    /**
     * Update project member relationship
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $mid Member ID.
     * @param \Gyroscops\Harbor\Api\Model\RoleRequest $role 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     */
    public function __construct(string $projectNameOrId, int $mid, \Gyroscops\Harbor\Api\Model\RoleRequest $role, array $headerParameters = [])
    {
        $this->project_name_or_id = $projectNameOrId;
        $this->mid = $mid;
        $this->body = $role;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{project_name_or_id}', '{mid}'], [$this->project_name_or_id, $this->mid], '/projects/{project_name_or_id}/members/{mid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Request-Id', 'X-Is-Resource-Name']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['X-Is-Resource-Name' => false]);
        $optionsResolver->addAllowedTypes('X-Request-Id', ['string']);
        $optionsResolver->addAllowedTypes('X-Is-Resource-Name', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        throw new \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['basic'];
    }
}