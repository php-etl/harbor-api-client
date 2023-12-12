<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DownloadScanData extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $execution_id;
    /**
     * Download the scan data report. Default format is CSV
     *
     * @param int $executionId Execution ID
     * @param array $queryParameters {
     *     @var string $format The format of the data to be exported. e.g. CSV or PDF
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(int $executionId, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->execution_id = $executionId;
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
        return str_replace(array('{execution_id}'), array($this->execution_id), '/export/cve/download/{execution_id}');
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
        $optionsResolver->setDefined(array('format'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('format', array('string'));
        return $optionsResolver;
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
     * @throws \Gyroscops\Harbor\Api\Exception\DownloadScanDataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DownloadScanDataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DownloadScanDataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DownloadScanDataInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DownloadScanDataUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DownloadScanDataForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DownloadScanDataNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DownloadScanDataInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}