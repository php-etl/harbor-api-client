<?php

namespace Harbor\Api\Endpoint;

class GetUsersCurrentPermissions extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
    * This endpoint is to get the current user permissions.
    
    *
    * @param array $queryParameters {
    *     @var string $scope Get permissions of the scope
    *     @var bool $relative If true, the resources in the response are relative to the scope,
    eg for resource '/project/1/repository' if relative is 'true' then the resource in response will be 'repository'.
    
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
        return '/users/current/permissions';
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
        $optionsResolver->setDefined(array('scope', 'relative'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('scope', array('string'));
        $optionsResolver->setAllowedTypes('relative', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\GetUsersCurrentPermissionsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetUsersCurrentPermissionsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Permission[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\Permission[]', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetUsersCurrentPermissionsUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetUsersCurrentPermissionsInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}