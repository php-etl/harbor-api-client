<?php

namespace Gyroscops\Harbor\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Gyroscops\Harbor\Api\Runtime\Normalizer\CheckArray;
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
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Configurations';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Configurations';
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
        $object = new \Gyroscops\Harbor\Api\Model\Configurations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('oidc_verify_cert', $data) && $data['oidc_verify_cert'] !== null) {
            $object->setOidcVerifyCert($data['oidc_verify_cert']);
        } elseif (\array_key_exists('oidc_verify_cert', $data) && $data['oidc_verify_cert'] === null) {
            $object->setOidcVerifyCert(null);
        }
        if (\array_key_exists('email_identity', $data) && $data['email_identity'] !== null) {
            $object->setEmailIdentity($data['email_identity']);
        } elseif (\array_key_exists('email_identity', $data) && $data['email_identity'] === null) {
            $object->setEmailIdentity(null);
        }
        if (\array_key_exists('ldap_group_search_filter', $data) && $data['ldap_group_search_filter'] !== null) {
            $object->setLdapGroupSearchFilter($data['ldap_group_search_filter']);
        } elseif (\array_key_exists('ldap_group_search_filter', $data) && $data['ldap_group_search_filter'] === null) {
            $object->setLdapGroupSearchFilter(null);
        }
        if (\array_key_exists('auth_mode', $data) && $data['auth_mode'] !== null) {
            $object->setAuthMode($data['auth_mode']);
        } elseif (\array_key_exists('auth_mode', $data) && $data['auth_mode'] === null) {
            $object->setAuthMode(null);
        }
        if (\array_key_exists('self_registration', $data) && $data['self_registration'] !== null) {
            $object->setSelfRegistration($data['self_registration']);
        } elseif (\array_key_exists('self_registration', $data) && $data['self_registration'] === null) {
            $object->setSelfRegistration(null);
        }
        if (\array_key_exists('oidc_scope', $data) && $data['oidc_scope'] !== null) {
            $object->setOidcScope($data['oidc_scope']);
        } elseif (\array_key_exists('oidc_scope', $data) && $data['oidc_scope'] === null) {
            $object->setOidcScope(null);
        }
        if (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] !== null) {
            $object->setLdapSearchDn($data['ldap_search_dn']);
        } elseif (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] === null) {
            $object->setLdapSearchDn(null);
        }
        if (\array_key_exists('storage_per_project', $data) && $data['storage_per_project'] !== null) {
            $object->setStoragePerProject($data['storage_per_project']);
        } elseif (\array_key_exists('storage_per_project', $data) && $data['storage_per_project'] === null) {
            $object->setStoragePerProject(null);
        }
        if (\array_key_exists('scan_all_policy', $data) && $data['scan_all_policy'] !== null) {
            $object->setScanAllPolicy($this->denormalizer->denormalize($data['scan_all_policy'], 'Gyroscops\\Harbor\\Api\\Model\\ConfigurationsScanAllPolicy', 'json', $context));
        } elseif (\array_key_exists('scan_all_policy', $data) && $data['scan_all_policy'] === null) {
            $object->setScanAllPolicy(null);
        }
        if (\array_key_exists('verify_remote_cert', $data) && $data['verify_remote_cert'] !== null) {
            $object->setVerifyRemoteCert($data['verify_remote_cert']);
        } elseif (\array_key_exists('verify_remote_cert', $data) && $data['verify_remote_cert'] === null) {
            $object->setVerifyRemoteCert(null);
        }
        if (\array_key_exists('ldap_timeout', $data) && $data['ldap_timeout'] !== null) {
            $object->setLdapTimeout($data['ldap_timeout']);
        } elseif (\array_key_exists('ldap_timeout', $data) && $data['ldap_timeout'] === null) {
            $object->setLdapTimeout(null);
        }
        if (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] !== null) {
            $object->setLdapBaseDn($data['ldap_base_dn']);
        } elseif (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] === null) {
            $object->setLdapBaseDn(null);
        }
        if (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] !== null) {
            $object->setLdapFilter($data['ldap_filter']);
        } elseif (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] === null) {
            $object->setLdapFilter(null);
        }
        if (\array_key_exists('read_only', $data) && $data['read_only'] !== null) {
            $object->setReadOnly($data['read_only']);
        } elseif (\array_key_exists('read_only', $data) && $data['read_only'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('quota_per_project_enable', $data) && $data['quota_per_project_enable'] !== null) {
            $object->setQuotaPerProjectEnable($data['quota_per_project_enable']);
        } elseif (\array_key_exists('quota_per_project_enable', $data) && $data['quota_per_project_enable'] === null) {
            $object->setQuotaPerProjectEnable(null);
        }
        if (\array_key_exists('ldap_url', $data) && $data['ldap_url'] !== null) {
            $object->setLdapUrl($data['ldap_url']);
        } elseif (\array_key_exists('ldap_url', $data) && $data['ldap_url'] === null) {
            $object->setLdapUrl(null);
        }
        if (\array_key_exists('oidc_name', $data) && $data['oidc_name'] !== null) {
            $object->setOidcName($data['oidc_name']);
        } elseif (\array_key_exists('oidc_name', $data) && $data['oidc_name'] === null) {
            $object->setOidcName(null);
        }
        if (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] !== null) {
            $object->setProjectCreationRestriction($data['project_creation_restriction']);
        } elseif (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] === null) {
            $object->setProjectCreationRestriction(null);
        }
        if (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] !== null) {
            $object->setLdapUid($data['ldap_uid']);
        } elseif (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] === null) {
            $object->setLdapUid(null);
        }
        if (\array_key_exists('oidc_client_id', $data) && $data['oidc_client_id'] !== null) {
            $object->setOidcClientId($data['oidc_client_id']);
        } elseif (\array_key_exists('oidc_client_id', $data) && $data['oidc_client_id'] === null) {
            $object->setOidcClientId(null);
        }
        if (\array_key_exists('ldap_group_base_dn', $data) && $data['ldap_group_base_dn'] !== null) {
            $object->setLdapGroupBaseDn($data['ldap_group_base_dn']);
        } elseif (\array_key_exists('ldap_group_base_dn', $data) && $data['ldap_group_base_dn'] === null) {
            $object->setLdapGroupBaseDn(null);
        }
        if (\array_key_exists('ldap_group_attribute_name', $data) && $data['ldap_group_attribute_name'] !== null) {
            $object->setLdapGroupAttributeName($data['ldap_group_attribute_name']);
        } elseif (\array_key_exists('ldap_group_attribute_name', $data) && $data['ldap_group_attribute_name'] === null) {
            $object->setLdapGroupAttributeName(null);
        }
        if (\array_key_exists('email_insecure', $data) && $data['email_insecure'] !== null) {
            $object->setEmailInsecure($data['email_insecure']);
        } elseif (\array_key_exists('email_insecure', $data) && $data['email_insecure'] === null) {
            $object->setEmailInsecure(null);
        }
        if (\array_key_exists('ldap_group_admin_dn', $data) && $data['ldap_group_admin_dn'] !== null) {
            $object->setLdapGroupAdminDn($data['ldap_group_admin_dn']);
        } elseif (\array_key_exists('ldap_group_admin_dn', $data) && $data['ldap_group_admin_dn'] === null) {
            $object->setLdapGroupAdminDn(null);
        }
        if (\array_key_exists('email_username', $data) && $data['email_username'] !== null) {
            $object->setEmailUsername($data['email_username']);
        } elseif (\array_key_exists('email_username', $data) && $data['email_username'] === null) {
            $object->setEmailUsername(null);
        }
        if (\array_key_exists('oidc_endpoint', $data) && $data['oidc_endpoint'] !== null) {
            $object->setOidcEndpoint($data['oidc_endpoint']);
        } elseif (\array_key_exists('oidc_endpoint', $data) && $data['oidc_endpoint'] === null) {
            $object->setOidcEndpoint(null);
        }
        if (\array_key_exists('oidc_client_secret', $data) && $data['oidc_client_secret'] !== null) {
            $object->setOidcClientSecret($data['oidc_client_secret']);
        } elseif (\array_key_exists('oidc_client_secret', $data) && $data['oidc_client_secret'] === null) {
            $object->setOidcClientSecret(null);
        }
        if (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] !== null) {
            $object->setLdapScope($data['ldap_scope']);
        } elseif (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] === null) {
            $object->setLdapScope(null);
        }
        if (\array_key_exists('count_per_project', $data) && $data['count_per_project'] !== null) {
            $object->setCountPerProject($data['count_per_project']);
        } elseif (\array_key_exists('count_per_project', $data) && $data['count_per_project'] === null) {
            $object->setCountPerProject(null);
        }
        if (\array_key_exists('token_expiration', $data) && $data['token_expiration'] !== null) {
            $object->setTokenExpiration($data['token_expiration']);
        } elseif (\array_key_exists('token_expiration', $data) && $data['token_expiration'] === null) {
            $object->setTokenExpiration(null);
        }
        if (\array_key_exists('ldap_group_search_scope', $data) && $data['ldap_group_search_scope'] !== null) {
            $object->setLdapGroupSearchScope($data['ldap_group_search_scope']);
        } elseif (\array_key_exists('ldap_group_search_scope', $data) && $data['ldap_group_search_scope'] === null) {
            $object->setLdapGroupSearchScope(null);
        }
        if (\array_key_exists('email_ssl', $data) && $data['email_ssl'] !== null) {
            $object->setEmailSsl($data['email_ssl']);
        } elseif (\array_key_exists('email_ssl', $data) && $data['email_ssl'] === null) {
            $object->setEmailSsl(null);
        }
        if (\array_key_exists('email_port', $data) && $data['email_port'] !== null) {
            $object->setEmailPort($data['email_port']);
        } elseif (\array_key_exists('email_port', $data) && $data['email_port'] === null) {
            $object->setEmailPort(null);
        }
        if (\array_key_exists('email_host', $data) && $data['email_host'] !== null) {
            $object->setEmailHost($data['email_host']);
        } elseif (\array_key_exists('email_host', $data) && $data['email_host'] === null) {
            $object->setEmailHost(null);
        }
        if (\array_key_exists('email_from', $data) && $data['email_from'] !== null) {
            $object->setEmailFrom($data['email_from']);
        } elseif (\array_key_exists('email_from', $data) && $data['email_from'] === null) {
            $object->setEmailFrom(null);
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
