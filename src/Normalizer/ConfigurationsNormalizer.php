<?php

namespace Harbor\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Harbor\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ConfigurationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\Configurations';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\Configurations';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Harbor\Api\Model\Configurations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('oidc_verify_cert', $data)) {
            $object->setOidcVerifyCert($data['oidc_verify_cert']);
        }
        if (\array_key_exists('email_identity', $data)) {
            $object->setEmailIdentity($data['email_identity']);
        }
        if (\array_key_exists('ldap_group_search_filter', $data)) {
            $object->setLdapGroupSearchFilter($data['ldap_group_search_filter']);
        }
        if (\array_key_exists('auth_mode', $data)) {
            $object->setAuthMode($data['auth_mode']);
        }
        if (\array_key_exists('self_registration', $data)) {
            $object->setSelfRegistration($data['self_registration']);
        }
        if (\array_key_exists('oidc_scope', $data)) {
            $object->setOidcScope($data['oidc_scope']);
        }
        if (\array_key_exists('ldap_search_dn', $data)) {
            $object->setLdapSearchDn($data['ldap_search_dn']);
        }
        if (\array_key_exists('storage_per_project', $data)) {
            $object->setStoragePerProject($data['storage_per_project']);
        }
        if (\array_key_exists('scan_all_policy', $data)) {
            $object->setScanAllPolicy($this->denormalizer->denormalize($data['scan_all_policy'], 'Harbor\\Api\\Model\\ConfigurationsScanAllPolicy', 'json', $context));
        }
        if (\array_key_exists('verify_remote_cert', $data)) {
            $object->setVerifyRemoteCert($data['verify_remote_cert']);
        }
        if (\array_key_exists('ldap_timeout', $data)) {
            $object->setLdapTimeout($data['ldap_timeout']);
        }
        if (\array_key_exists('ldap_base_dn', $data)) {
            $object->setLdapBaseDn($data['ldap_base_dn']);
        }
        if (\array_key_exists('ldap_filter', $data)) {
            $object->setLdapFilter($data['ldap_filter']);
        }
        if (\array_key_exists('read_only', $data)) {
            $object->setReadOnly($data['read_only']);
        }
        if (\array_key_exists('quota_per_project_enable', $data)) {
            $object->setQuotaPerProjectEnable($data['quota_per_project_enable']);
        }
        if (\array_key_exists('ldap_url', $data)) {
            $object->setLdapUrl($data['ldap_url']);
        }
        if (\array_key_exists('oidc_name', $data)) {
            $object->setOidcName($data['oidc_name']);
        }
        if (\array_key_exists('project_creation_restriction', $data)) {
            $object->setProjectCreationRestriction($data['project_creation_restriction']);
        }
        if (\array_key_exists('ldap_uid', $data)) {
            $object->setLdapUid($data['ldap_uid']);
        }
        if (\array_key_exists('oidc_client_id', $data)) {
            $object->setOidcClientId($data['oidc_client_id']);
        }
        if (\array_key_exists('ldap_group_base_dn', $data)) {
            $object->setLdapGroupBaseDn($data['ldap_group_base_dn']);
        }
        if (\array_key_exists('ldap_group_attribute_name', $data)) {
            $object->setLdapGroupAttributeName($data['ldap_group_attribute_name']);
        }
        if (\array_key_exists('email_insecure', $data)) {
            $object->setEmailInsecure($data['email_insecure']);
        }
        if (\array_key_exists('ldap_group_admin_dn', $data)) {
            $object->setLdapGroupAdminDn($data['ldap_group_admin_dn']);
        }
        if (\array_key_exists('email_username', $data)) {
            $object->setEmailUsername($data['email_username']);
        }
        if (\array_key_exists('oidc_endpoint', $data)) {
            $object->setOidcEndpoint($data['oidc_endpoint']);
        }
        if (\array_key_exists('oidc_client_secret', $data)) {
            $object->setOidcClientSecret($data['oidc_client_secret']);
        }
        if (\array_key_exists('ldap_scope', $data)) {
            $object->setLdapScope($data['ldap_scope']);
        }
        if (\array_key_exists('count_per_project', $data)) {
            $object->setCountPerProject($data['count_per_project']);
        }
        if (\array_key_exists('token_expiration', $data)) {
            $object->setTokenExpiration($data['token_expiration']);
        }
        if (\array_key_exists('ldap_group_search_scope', $data)) {
            $object->setLdapGroupSearchScope($data['ldap_group_search_scope']);
        }
        if (\array_key_exists('email_ssl', $data)) {
            $object->setEmailSsl($data['email_ssl']);
        }
        if (\array_key_exists('email_port', $data)) {
            $object->setEmailPort($data['email_port']);
        }
        if (\array_key_exists('email_host', $data)) {
            $object->setEmailHost($data['email_host']);
        }
        if (\array_key_exists('email_from', $data)) {
            $object->setEmailFrom($data['email_from']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getOidcVerifyCert()) {
            $data['oidc_verify_cert'] = $object->getOidcVerifyCert();
        }
        if (null !== $object->getEmailIdentity()) {
            $data['email_identity'] = $object->getEmailIdentity();
        }
        if (null !== $object->getLdapGroupSearchFilter()) {
            $data['ldap_group_search_filter'] = $object->getLdapGroupSearchFilter();
        }
        if (null !== $object->getAuthMode()) {
            $data['auth_mode'] = $object->getAuthMode();
        }
        if (null !== $object->getSelfRegistration()) {
            $data['self_registration'] = $object->getSelfRegistration();
        }
        if (null !== $object->getOidcScope()) {
            $data['oidc_scope'] = $object->getOidcScope();
        }
        if (null !== $object->getLdapSearchDn()) {
            $data['ldap_search_dn'] = $object->getLdapSearchDn();
        }
        if (null !== $object->getStoragePerProject()) {
            $data['storage_per_project'] = $object->getStoragePerProject();
        }
        if (null !== $object->getScanAllPolicy()) {
            $data['scan_all_policy'] = $this->normalizer->normalize($object->getScanAllPolicy(), 'json', $context);
        }
        if (null !== $object->getVerifyRemoteCert()) {
            $data['verify_remote_cert'] = $object->getVerifyRemoteCert();
        }
        if (null !== $object->getLdapTimeout()) {
            $data['ldap_timeout'] = $object->getLdapTimeout();
        }
        if (null !== $object->getLdapBaseDn()) {
            $data['ldap_base_dn'] = $object->getLdapBaseDn();
        }
        if (null !== $object->getLdapFilter()) {
            $data['ldap_filter'] = $object->getLdapFilter();
        }
        if (null !== $object->getReadOnly()) {
            $data['read_only'] = $object->getReadOnly();
        }
        if (null !== $object->getQuotaPerProjectEnable()) {
            $data['quota_per_project_enable'] = $object->getQuotaPerProjectEnable();
        }
        if (null !== $object->getLdapUrl()) {
            $data['ldap_url'] = $object->getLdapUrl();
        }
        if (null !== $object->getOidcName()) {
            $data['oidc_name'] = $object->getOidcName();
        }
        if (null !== $object->getProjectCreationRestriction()) {
            $data['project_creation_restriction'] = $object->getProjectCreationRestriction();
        }
        if (null !== $object->getLdapUid()) {
            $data['ldap_uid'] = $object->getLdapUid();
        }
        if (null !== $object->getOidcClientId()) {
            $data['oidc_client_id'] = $object->getOidcClientId();
        }
        if (null !== $object->getLdapGroupBaseDn()) {
            $data['ldap_group_base_dn'] = $object->getLdapGroupBaseDn();
        }
        if (null !== $object->getLdapGroupAttributeName()) {
            $data['ldap_group_attribute_name'] = $object->getLdapGroupAttributeName();
        }
        if (null !== $object->getEmailInsecure()) {
            $data['email_insecure'] = $object->getEmailInsecure();
        }
        if (null !== $object->getLdapGroupAdminDn()) {
            $data['ldap_group_admin_dn'] = $object->getLdapGroupAdminDn();
        }
        if (null !== $object->getEmailUsername()) {
            $data['email_username'] = $object->getEmailUsername();
        }
        if (null !== $object->getOidcEndpoint()) {
            $data['oidc_endpoint'] = $object->getOidcEndpoint();
        }
        if (null !== $object->getOidcClientSecret()) {
            $data['oidc_client_secret'] = $object->getOidcClientSecret();
        }
        if (null !== $object->getLdapScope()) {
            $data['ldap_scope'] = $object->getLdapScope();
        }
        if (null !== $object->getCountPerProject()) {
            $data['count_per_project'] = $object->getCountPerProject();
        }
        if (null !== $object->getTokenExpiration()) {
            $data['token_expiration'] = $object->getTokenExpiration();
        }
        if (null !== $object->getLdapGroupSearchScope()) {
            $data['ldap_group_search_scope'] = $object->getLdapGroupSearchScope();
        }
        if (null !== $object->getEmailSsl()) {
            $data['email_ssl'] = $object->getEmailSsl();
        }
        if (null !== $object->getEmailPort()) {
            $data['email_port'] = $object->getEmailPort();
        }
        if (null !== $object->getEmailHost()) {
            $data['email_host'] = $object->getEmailHost();
        }
        if (null !== $object->getEmailFrom()) {
            $data['email_from'] = $object->getEmailFrom();
        }
        return $data;
    }
}