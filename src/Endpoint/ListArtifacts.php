<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class ListArtifacts extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name;
    protected $repository_name;
    /**
    * List artifacts under the specific project and repository. Except the basic properties, the other supported queries in "q" includes "tags=*" to list only tagged artifacts, "tags=nil" to list only untagged artifacts, "tags=~v" to list artifacts whose tag fuzzy matches "v", "tags=v" to list artifact whose tag exactly matches "v", "labels=(id1, id2)" to list artifacts that both labels with id1 and id2 are added to
    *
    * @param string $projectName The name of the project
    * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
    * @param array $queryParameters {
    *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
    *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
    *     @var int $page The page number
    *     @var int $page_size The size of per page
    *     @var bool $with_tag Specify whether the tags are included inside the returning artifacts
    *     @var bool $with_label Specify whether the labels are included inside the returning artifacts
    *     @var bool $with_scan_overview Specify whether the scan overview is included inside the returning artifacts
    *     @var bool $with_signature Specify whether the signature is included inside the tags of the returning artifacts. Only works when setting "with_tag=true"
    *     @var bool $with_immutable_status Specify whether the immutable status is included inside the tags of the returning artifacts. Only works when setting "with_immutable_status=true"
    *     @var bool $with_accessory Specify whether the accessories are included of the returning artifacts. Only works when setting "with_accessory=true"
    * }
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    *     @var string $X-Accept-Vulnerabilities A comma-separated lists of MIME types for the scan report or scan summary. The first mime type will be used when the report found for it.
    Currently the mime type supports 'application/vnd.scanner.adapter.vuln.report.harbor+json; version=1.0' and 'application/vnd.security.vulnerability.report; version=1.1'
    * }
    */
    public function __construct(string $projectName, string $repositoryName, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->project_name = $projectName;
        $this->repository_name = $repositoryName;
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
        return str_replace(array('{project_name}', '{repository_name}'), array($this->project_name, $this->repository_name), '/projects/{project_name}/repositories/{repository_name}/artifacts');
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
        $optionsResolver->setDefined(array('q', 'sort', 'page', 'page_size', 'with_tag', 'with_label', 'with_scan_overview', 'with_signature', 'with_immutable_status', 'with_accessory'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1, 'page_size' => 10, 'with_tag' => true, 'with_label' => false, 'with_scan_overview' => false, 'with_signature' => false, 'with_immutable_status' => false, 'with_accessory' => false));
        $optionsResolver->setAllowedTypes('q', array('string'));
        $optionsResolver->setAllowedTypes('sort', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('page_size', array('int'));
        $optionsResolver->setAllowedTypes('with_tag', array('bool'));
        $optionsResolver->setAllowedTypes('with_label', array('bool'));
        $optionsResolver->setAllowedTypes('with_scan_overview', array('bool'));
        $optionsResolver->setAllowedTypes('with_signature', array('bool'));
        $optionsResolver->setAllowedTypes('with_immutable_status', array('bool'));
        $optionsResolver->setAllowedTypes('with_accessory', array('bool'));
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
     * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Artifact[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Artifact[]', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListArtifactsBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListArtifactsUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListArtifactsForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListArtifactsNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListArtifactsInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}