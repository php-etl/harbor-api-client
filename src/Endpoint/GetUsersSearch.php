<?php

namespace Harbor\Api\Endpoint;

class GetUsersSearch extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is to search the users by username.
     *
     * @param array $queryParameters {
     *     @var string $username Username for filtering results.
     *     @var int $page The page number, default is 1.
     *     @var int $page_size The size of per page.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/users/search';
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
        $optionsResolver->setDefined(array('username', 'page', 'page_size'));
        $optionsResolver->setRequired(array('username'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('username', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('page_size', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\GetUsersSearchInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\UserSearch[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\UserSearch[]', 'json');
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetUsersSearchInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}