<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostLdapUsersImport extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
    * This endpoint adds the selected available ldap users to harbor based on related configuration parameters from the system. System will try to guess the user email address and realname, add to harbor user information.
    If have errors when import user, will return the list of importing failed uid and the failed reason.
    
    *
    * @param \Gyroscops\Harbor\Api\Model\LdapImportUsers $uidList The uid listed for importing. This list will check users validity of ldap service based on configuration from the system.
    */
    public function __construct(\Gyroscops\Harbor\Api\Model\LdapImportUsers $uidList)
    {
        $this->body = $uidList;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/ldap/users/import';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportUnsupportedMediaTypeException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\LdapFailedImportUsers[]', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportUnauthorizedException();
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportUnsupportedMediaTypeException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}