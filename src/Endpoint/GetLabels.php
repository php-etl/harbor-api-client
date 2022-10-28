<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetLabels extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    /**
     * This endpoint let user list labels by name, scope and project_id
     *
     * @param array $queryParameters {
     *     @var string $name The label name.
     *     @var string $scope The label scope. Valid values are g and p. g for global labels and p for project labels.
     *     @var int $project_id Relevant project ID, required when scope is p.
     *     @var int $page The page nubmer.
     *     @var int $page_size The size of per page.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/labels';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('name', 'scope', 'project_id', 'page', 'page_size'));
        $optionsResolver->setRequired(array('scope'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('scope', array('string'));
        $optionsResolver->setAllowedTypes('project_id', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('page_size', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Label[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Label[]', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLabelsBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLabelsUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLabelsInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
