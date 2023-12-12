<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetLatestScheduledScanAllMetrics extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * Get the metrics of the latest scheduled scan all process
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(array $headerParameters = array())
    {
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/scans/schedule/metrics';
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Stats
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Stats', 'json');
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (412 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsPreconditionFailedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}