<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetArtifact extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name;
    protected $repository_name;
    protected $reference;
    /**
    * Get the artifact specified by the reference under the project and repository. The reference can be digest or tag.
    *
    * @param string $projectName The name of the project
    * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
    * @param string $reference The reference of the artifact, can be digest or tag
    * @param array $queryParameters {
    *     @var int $page The page number
    *     @var int $page_size The size of per page
    *     @var bool $with_tag Specify whether the tags are inclued inside the returning artifacts
    *     @var bool $with_label Specify whether the labels are inclued inside the returning artifacts
    *     @var bool $with_scan_overview Specify whether the scan overview is inclued inside the returning artifacts
    *     @var bool $with_accessory Specify whether the accessories are included of the returning artifacts.
    *     @var bool $with_signature Specify whether the signature is inclued inside the returning artifacts
    *     @var bool $with_immutable_status Specify whether the immutable status is inclued inside the tags of the returning artifacts.
    * }
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    *     @var string $X-Accept-Vulnerabilities A comma-separated lists of MIME types for the scan report or scan summary. The first mime type will be used when the report found for it.
    Currently the mime type supports 'application/vnd.scanner.adapter.vuln.report.harbor+json; version=1.0' and 'application/vnd.security.vulnerability.report; version=1.1'
    * }
    */
    public function __construct(string $projectName, string $repositoryName, string $reference, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->project_name = $projectName;
        $this->repository_name = $repositoryName;
        $this->reference = $reference;
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
        return str_replace(array('{project_name}', '{repository_name}', '{reference}'), array($this->project_name, $this->repository_name, $this->reference), '/projects/{project_name}/repositories/{repository_name}/artifacts/{reference}');
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
        $optionsResolver->setDefined(array('page', 'page_size', 'with_tag', 'with_label', 'with_scan_overview', 'with_accessory', 'with_signature', 'with_immutable_status'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1, 'page_size' => 10, 'with_tag' => true, 'with_label' => false, 'with_scan_overview' => false, 'with_accessory' => false, 'with_signature' => false, 'with_immutable_status' => false));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('page_size', array('int'));
        $optionsResolver->setAllowedTypes('with_tag', array('bool'));
        $optionsResolver->setAllowedTypes('with_label', array('bool'));
        $optionsResolver->setAllowedTypes('with_scan_overview', array('bool'));
        $optionsResolver->setAllowedTypes('with_accessory', array('bool'));
        $optionsResolver->setAllowedTypes('with_signature', array('bool'));
        $optionsResolver->setAllowedTypes('with_immutable_status', array('bool'));
        return $optionsResolver;
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Artifact
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Artifact', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetArtifactBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetArtifactUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetArtifactForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetArtifactNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetArtifactInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}