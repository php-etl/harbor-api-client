<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class CreateRobotV1 extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name_or_id;
    /**
     * Create a robot account
     *
     * @param string $projectNameOrId The name or id of the project
     * @param \Gyroscops\Harbor\Api\Model\RobotCreateV1 $robot The JSON object of a robot account.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     */
    public function __construct(string $projectNameOrId, \Gyroscops\Harbor\Api\Model\RobotCreateV1 $robot, array $headerParameters = array())
    {
        $this->project_name_or_id = $projectNameOrId;
        $this->body = $robot;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name_or_id}'), array($this->project_name_or_id), '/projects/{project_name_or_id}/robots');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Request-Id', 'X-Is-Resource-Name'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('X-Is-Resource-Name' => false));
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        $optionsResolver->setAllowedTypes('X-Is-Resource-Name', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1BadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1UnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1ForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1NotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1InternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotCreated
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\RobotCreated', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateRobotV1BadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateRobotV1UnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateRobotV1ForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateRobotV1NotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateRobotV1InternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}