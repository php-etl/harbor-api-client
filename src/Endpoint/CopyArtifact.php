<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class CopyArtifact extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name;
    protected $repository_name;
    /**
     * Copy the artifact specified in the "from" parameter to the repository.
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param array $queryParameters {
     *     @var string $from The artifact from which the new artifact is copied from, the format should be "project/repository:tag" or "project/repository@digest".
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
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
        return 'POST';
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
        $optionsResolver->setDefined(array('from'));
        $optionsResolver->setRequired(array('from'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('from', array('string'));
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
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactMethodNotAllowedException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CopyArtifactBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CopyArtifactUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CopyArtifactForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CopyArtifactNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (405 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CopyArtifactMethodNotAllowedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CopyArtifactInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}