<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class ListVulnerabilities extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
    * Get the vulnerability list. use q to pass the query condition, 
    supported conditions:
    cve_id(exact match)
    cvss_score_v3(range condition)
    severity(exact match)
    repository_name(exact match) 
    project_id(exact match) 
    package(exact match)
    tag(exact match) 
    digest(exact match)
    
    *
    * @param array $queryParameters {
    *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
    *     @var int $page The page number
    *     @var int $page_size The size of per page
    *     @var bool $tune_count Enable to ignore X-Total-Count when the total count > 1000, if the total count is less than 1000, the real total count is returned, else -1.
    *     @var bool $with_tag Specify whether the tag information is included inside vulnerability information
    * }
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    * }
    */
    public function __construct(array $queryParameters = array(), array $headerParameters = array())
    {
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
        return '/security/vul';
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
        $optionsResolver->setDefined(array('q', 'page', 'page_size', 'tune_count', 'with_tag'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1, 'page_size' => 10, 'tune_count' => false, 'with_tag' => false));
        $optionsResolver->setAllowedTypes('q', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('page_size', array('int'));
        $optionsResolver->setAllowedTypes('tune_count', array('bool'));
        $optionsResolver->setAllowedTypes('with_tag', array('bool'));
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
     * @throws \Gyroscops\Harbor\Api\Exception\ListVulnerabilitiesBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListVulnerabilitiesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListVulnerabilitiesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\VulnerabilityItem[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\VulnerabilityItem[]', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListVulnerabilitiesBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListVulnerabilitiesUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListVulnerabilitiesInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}