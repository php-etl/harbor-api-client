<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteProjectMetadata extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name_or_id;
    protected $meta_name;
    /**
     * Delete the specific metadata for the specific project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param string $metaName The name of metadata.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     */
    public function __construct(string $projectNameOrId, string $metaName, array $headerParameters = array())
    {
        $this->project_name_or_id = $projectNameOrId;
        $this->meta_name = $metaName;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name_or_id}', '{meta_name}'), array($this->project_name_or_id, $this->meta_name), '/projects/{project_name_or_id}/metadatas/{meta_name}');
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
        $optionsResolver->setDefined(array('X-Request-Id', 'X-Is-Resource-Name'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('X-Is-Resource-Name' => false));
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        $optionsResolver->setAllowedTypes('X-Is-Resource-Name', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataConflictException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}