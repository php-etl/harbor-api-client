<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class ListProjects extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint returns projects created by Harbor.
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var string $name The name of project.
     *     @var bool $public The project is public or private.
     *     @var string $owner The name of project owner.
     *     @var bool $with_detail Bool value indicating whether return detailed information of the project
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
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
        return '/projects';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['q', 'page', 'page_size', 'sort', 'name', 'public', 'owner', 'with_detail']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 10, 'with_detail' => true]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('page_size', ['int']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('public', ['bool']);
        $optionsResolver->addAllowedTypes('owner', ['string']);
        $optionsResolver->addAllowedTypes('with_detail', ['bool']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Request-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Request-Id', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectsInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \Gyroscops\Harbor\Api\Model\Project[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Project[]', 'json');
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListProjectsUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\ListProjectsInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        throw new \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['basic'];
    }
}