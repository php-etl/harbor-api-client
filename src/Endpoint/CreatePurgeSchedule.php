<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class CreatePurgeSchedule extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
    * This endpoint is for update purge job schedule.
    
    *
    * @param \Gyroscops\Harbor\Api\Model\Schedule $schedule The purge job's schedule, it is a json object. |
    The sample format is |
    {"parameters":{"audit_retention_hour":168,"dry_run":true, "include_operations":"create,delete,pull"},"schedule":{"type":"Hourly","cron":"0 0 * * * *"}} |
    the include_operation should be a comma separated string, e.g. create,delete,pull, if it is empty, no operation will be purged.
    
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    * }
    */
    public function __construct(\Gyroscops\Harbor\Api\Model\Schedule $schedule, array $headerParameters = array())
    {
        $this->body = $schedule;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/system/purgeaudit/schedule';
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
        $optionsResolver->setDefined(array('X-Request-Id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}