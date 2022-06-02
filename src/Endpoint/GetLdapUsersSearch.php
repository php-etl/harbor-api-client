<?php

namespace Harbor\Api\Endpoint;

class GetLdapUsersSearch extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint searches the available ldap users based on related configuration parameters. Support searched by input ladp configuration, load configuration from the system and specific filter.
     *
     * @param array $queryParameters {
     *     @var string $username Registered user ID
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
        return '/ldap/users/search';
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
        $optionsResolver->setDefined(array('username'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('username', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\GetLdapUsersSearchUnauthorizedException
     * @throws \Harbor\Api\Exception\GetLdapUsersSearchForbiddenException
     * @throws \Harbor\Api\Exception\GetLdapUsersSearchInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\LdapUsers[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\LdapUsers[]', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetLdapUsersSearchUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetLdapUsersSearchForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetLdapUsersSearchInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}