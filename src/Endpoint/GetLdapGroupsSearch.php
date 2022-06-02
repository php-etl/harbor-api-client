<?php

namespace Harbor\Api\Endpoint;

class GetLdapGroupsSearch extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint searches the available ldap groups based on related configuration parameters. support to search by groupname or groupdn.
     *
     * @param array $queryParameters {
     *     @var string $groupname Ldap group name
     *     @var string $groupdn The LDAP group DN
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
        return '/ldap/groups/search';
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
        $optionsResolver->setDefined(array('groupname', 'groupdn'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('groupname', array('string'));
        $optionsResolver->setAllowedTypes('groupdn', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\GetLdapGroupsSearchBadRequestException
     * @throws \Harbor\Api\Exception\GetLdapGroupsSearchNotFoundException
     * @throws \Harbor\Api\Exception\GetLdapGroupsSearchInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\UserGroup[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\UserGroup[]', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\GetLdapGroupsSearchBadRequestException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetLdapGroupsSearchNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetLdapGroupsSearchInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}