<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetPreheatLog extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name;
    protected $preheat_policy_name;
    protected $execution_id;
    protected $task_id;
    /**
     * Get the log text stream of the specified task for the given execution
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param int $executionId Execution ID
     * @param int $taskId Task ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(string $projectName, string $preheatPolicyName, int $executionId, int $taskId, array $headerParameters = array())
    {
        $this->project_name = $projectName;
        $this->preheat_policy_name = $preheatPolicyName;
        $this->execution_id = $executionId;
        $this->task_id = $taskId;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name}', '{preheat_policy_name}', '{execution_id}', '{task_id}'), array($this->project_name, $this->preheat_policy_name, $this->execution_id, $this->task_id), '/projects/{project_name}/preheat/policies/{preheat_policy_name}/executions/{execution_id}/tasks/{task_id}/logs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Request-Id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetPreheatLogBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetPreheatLogUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetPreheatLogForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetPreheatLogNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetPreheatLogInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}