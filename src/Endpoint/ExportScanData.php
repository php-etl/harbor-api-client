<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class ExportScanData extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * Export scan data for selected projects
     *
     * @param \Gyroscops\Harbor\Api\Model\ScanDataExportRequest $criteria The criteria for the export
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var string $X-Scan-Data-Type The type of scan data to export
     * }
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\ScanDataExportRequest $criteria, array $headerParameters = array())
    {
        $this->body = $criteria;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/export/cve';
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
        $optionsResolver->setDefined(array('X-Request-Id', 'X-Scan-Data-Type'));
        $optionsResolver->setRequired(array('X-Scan-Data-Type'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        $optionsResolver->setAllowedTypes('X-Scan-Data-Type', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataMethodNotAllowedException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScanDataExportJob
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ScanDataExportJob', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ExportScanDataBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ExportScanDataUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ExportScanDataForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ExportScanDataNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (405 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ExportScanDataMethodNotAllowedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ExportScanDataConflictException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ExportScanDataInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}