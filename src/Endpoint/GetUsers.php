<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetUsers extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for user to search registered users, support for filtering results with username.Notice, by now this operation is only for administrator.
     *
     * @param array $queryParameters {
     *     @var string $username Username for filtering results.
     *     @var string $email Email for filtering results.
     *     @var int $page The page number, default is 1.
     *     @var int $page_size The size of per page.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/users';
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
        $optionsResolver->setDefined(array('username', 'email', 'page', 'page_size'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('username', array('string'));
        $optionsResolver->setAllowedTypes('email', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('page_size', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\User[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\User[]', 'json');
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsersForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsersUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsersInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUsersBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}