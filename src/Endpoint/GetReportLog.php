<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetReportLog extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name;
    protected $repository_name;
    protected $reference;
    protected $report_id;
    /**
     * Get the log of the scan report
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param string $reportId The report id to get the log
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(string $projectName, string $repositoryName, string $reference, string $reportId, array $headerParameters = array())
    {
        $this->project_name = $projectName;
        $this->repository_name = $repositoryName;
        $this->reference = $reference;
        $this->report_id = $reportId;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name}', '{repository_name}', '{reference}', '{report_id}'), array($this->project_name, $this->repository_name, $this->reference, $this->report_id), '/projects/{project_name}/repositories/{repository_name}/artifacts/{reference}/scan/{report_id}/log');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetReportLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReportLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReportLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReportLogInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReportLogUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReportLogForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReportLogNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetReportLogInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}