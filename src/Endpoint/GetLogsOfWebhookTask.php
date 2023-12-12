<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetLogsOfWebhookTask extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name_or_id;
    protected $webhook_policy_id;
    protected $execution_id;
    protected $task_id;
    /**
     * This endpoint returns the logs of a specific webhook task.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $webhookPolicyId The ID of the webhook policy
     * @param int $executionId Execution ID
     * @param int $taskId Task ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     */
    public function __construct(string $projectNameOrId, int $webhookPolicyId, int $executionId, int $taskId, array $headerParameters = array())
    {
        $this->project_name_or_id = $projectNameOrId;
        $this->webhook_policy_id = $webhookPolicyId;
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
        return str_replace(array('{project_name_or_id}', '{webhook_policy_id}', '{execution_id}', '{task_id}'), array($this->project_name_or_id, $this->webhook_policy_id, $this->execution_id, $this->task_id), '/projects/{project_name_or_id}/webhook/policies/{webhook_policy_id}/executions/{execution_id}/tasks/{task_id}/log');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}