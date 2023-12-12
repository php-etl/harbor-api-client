<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetVulnerabilitiesAddition extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name;
    protected $repository_name;
    protected $reference;
    /**
    * Get the vulnerabilities addition of the artifact specified by the reference under the project and repository.
    *
    * @param string $projectName The name of the project
    * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
    * @param string $reference The reference of the artifact, can be digest or tag
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    *     @var string $X-Accept-Vulnerabilities A comma-separated lists of MIME types for the scan report or scan summary. The first mime type will be used when the report found for it.
    Currently the mime type supports 'application/vnd.scanner.adapter.vuln.report.harbor+json; version=1.0' and 'application/vnd.security.vulnerability.report; version=1.1'
    * }
    */
    public function __construct(string $projectName, string $repositoryName, string $reference, array $headerParameters = array())
    {
        $this->project_name = $projectName;
        $this->repository_name = $repositoryName;
        $this->reference = $reference;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name}', '{repository_name}', '{reference}'), array($this->project_name, $this->repository_name, $this->reference), '/projects/{project_name}/repositories/{repository_name}/artifacts/{reference}/additions/vulnerabilities');
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
        $optionsResolver->setDefined(array('X-Request-Id', 'X-Accept-Vulnerabilities'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('X-Accept-Vulnerabilities' => 'application/vnd.security.vulnerability.report; version=1.1, application/vnd.scanner.adapter.vuln.report.harbor+json; version=1.0'));
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        $optionsResolver->setAllowedTypes('X-Accept-Vulnerabilities', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}