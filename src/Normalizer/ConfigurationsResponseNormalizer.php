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

class ConfigurationsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ConfigurationsResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ConfigurationsResponse';
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
        $object = new \Gyroscops\Harbor\Api\Model\ConfigurationsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('oidc_verify_cert', $data) && $data['oidc_verify_cert'] !== null) {
            $object->setOidcVerifyCert($this->denormalizer->denormalize($data['oidc_verify_cert'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        } elseif (\array_key_exists('oidc_verify_cert', $data) && $data['oidc_verify_cert'] === null) {
            $object->setOidcVerifyCert(null);
        }
        if (\array_key_exists('email_identity', $data) && $data['email_identity'] !== null) {
            $object->setEmailIdentity($this->denormalizer->denormalize($data['email_identity'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('email_identity', $data) && $data['email_identity'] === null) {
            $object->setEmailIdentity(null);
        }
        if (\array_key_exists('ldap_group_search_filter', $data) && $data['ldap_group_search_filter'] !== null) {
            $object->setLdapGroupSearchFilter($this->denormalizer->denormalize($data['ldap_group_search_filter'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_group_search_filter', $data) && $data['ldap_group_search_filter'] === null) {
            $object->setLdapGroupSearchFilter(null);
        }
        if (\array_key_exists('auth_mode', $data) && $data['auth_mode'] !== null) {
            $object->setAuthMode($this->denormalizer->denormalize($data['auth_mode'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('auth_mode', $data) && $data['auth_mode'] === null) {
            $object->setAuthMode(null);
        }
        if (\array_key_exists('self_registration', $data) && $data['self_registration'] !== null) {
            $object->setSelfRegistration($this->denormalizer->denormalize($data['self_registration'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        } elseif (\array_key_exists('self_registration', $data) && $data['self_registration'] === null) {
            $object->setSelfRegistration(null);
        }
        if (\array_key_exists('oidc_scope', $data) && $data['oidc_scope'] !== null) {
            $object->setOidcScope($this->denormalizer->denormalize($data['oidc_scope'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('oidc_scope', $data) && $data['oidc_scope'] === null) {
            $object->setOidcScope(null);
        }
        if (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] !== null) {
            $object->setLdapSearchDn($data['ldap_search_dn']);
        } elseif (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] === null) {
            $object->setLdapSearchDn(null);
        }
        if (\array_key_exists('storage_per_project', $data) && $data['storage_per_project'] !== null) {
            $object->setStoragePerProject($this->denormalizer->denormalize($data['storage_per_project'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        } elseif (\array_key_exists('storage_per_project', $data) && $data['storage_per_project'] === null) {
            $object->setStoragePerProject(null);
        }
        if (\array_key_exists('scan_all_policy', $data) && $data['scan_all_policy'] !== null) {
            $object->setScanAllPolicy($this->denormalizer->denormalize($data['scan_all_policy'], 'Gyroscops\\Harbor\\Api\\Model\\ConfigurationsResponseScanAllPolicy', 'json', $context));
        } elseif (\array_key_exists('scan_all_policy', $data) && $data['scan_all_policy'] === null) {
            $object->setScanAllPolicy(null);
        }
        if (\array_key_exists('verify_remote_cert', $data) && $data['verify_remote_cert'] !== null) {
            $object->setVerifyRemoteCert($this->denormalizer->denormalize($data['verify_remote_cert'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        } elseif (\array_key_exists('verify_remote_cert', $data) && $data['verify_remote_cert'] === null) {
            $object->setVerifyRemoteCert(null);
        }
        if (\array_key_exists('ldap_timeout', $data) && $data['ldap_timeout'] !== null) {
            $object->setLdapTimeout($this->denormalizer->denormalize($data['ldap_timeout'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_timeout', $data) && $data['ldap_timeout'] === null) {
            $object->setLdapTimeout(null);
        }
        if (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] !== null) {
            $object->setLdapBaseDn($this->denormalizer->denormalize($data['ldap_base_dn'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] === null) {
            $object->setLdapBaseDn(null);
        }
        if (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] !== null) {
            $object->setLdapFilter($this->denormalizer->denormalize($data['ldap_filter'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] === null) {
            $object->setLdapFilter(null);
        }
        if (\array_key_exists('read_only', $data) && $data['read_only'] !== null) {
            $object->setReadOnly($this->denormalizer->denormalize($data['read_only'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        } elseif (\array_key_exists('read_only', $data) && $data['read_only'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('quota_per_project_enable', $data) && $data['quota_per_project_enable'] !== null) {
            $object->setQuotaPerProjectEnable($this->denormalizer->denormalize($data['quota_per_project_enable'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        } elseif (\array_key_exists('quota_per_project_enable', $data) && $data['quota_per_project_enable'] === null) {
            $object->setQuotaPerProjectEnable(null);
        }
        if (\array_key_exists('ldap_url', $data) && $data['ldap_url'] !== null) {
            $object->setLdapUrl($this->denormalizer->denormalize($data['ldap_url'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_url', $data) && $data['ldap_url'] === null) {
            $object->setLdapUrl(null);
        }
        if (\array_key_exists('oidc_name', $data) && $data['oidc_name'] !== null) {
            $object->setOidcName($this->denormalizer->denormalize($data['oidc_name'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('oidc_name', $data) && $data['oidc_name'] === null) {
            $object->setOidcName(null);
        }
        if (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] !== null) {
            $object->setProjectCreationRestriction($this->denormalizer->denormalize($data['project_creation_restriction'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] === null) {
            $object->setProjectCreationRestriction(null);
        }
        if (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] !== null) {
            $object->setLdapUid($this->denormalizer->denormalize($data['ldap_uid'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] === null) {
            $object->setLdapUid(null);
        }
        if (\array_key_exists('oidc_client_id', $data) && $data['oidc_client_id'] !== null) {
            $object->setOidcClientId($this->denormalizer->denormalize($data['oidc_client_id'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('oidc_client_id', $data) && $data['oidc_client_id'] === null) {
            $object->setOidcClientId(null);
        }
        if (\array_key_exists('ldap_group_base_dn', $data) && $data['ldap_group_base_dn'] !== null) {
            $object->setLdapGroupBaseDn($this->denormalizer->denormalize($data['ldap_group_base_dn'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_group_base_dn', $data) && $data['ldap_group_base_dn'] === null) {
            $object->setLdapGroupBaseDn(null);
        }
        if (\array_key_exists('ldap_group_attribute_name', $data) && $data['ldap_group_attribute_name'] !== null) {
            $object->setLdapGroupAttributeName($this->denormalizer->denormalize($data['ldap_group_attribute_name'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_group_attribute_name', $data) && $data['ldap_group_attribute_name'] === null) {
            $object->setLdapGroupAttributeName(null);
        }
        if (\array_key_exists('email_insecure', $data) && $data['email_insecure'] !== null) {
            $object->setEmailInsecure($this->denormalizer->denormalize($data['email_insecure'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        } elseif (\array_key_exists('email_insecure', $data) && $data['email_insecure'] === null) {
            $object->setEmailInsecure(null);
        }
        if (\array_key_exists('ldap_group_admin_dn', $data) && $data['ldap_group_admin_dn'] !== null) {
            $object->setLdapGroupAdminDn($this->denormalizer->denormalize($data['ldap_group_admin_dn'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_group_admin_dn', $data) && $data['ldap_group_admin_dn'] === null) {
            $object->setLdapGroupAdminDn(null);
        }
        if (\array_key_exists('email_username', $data) && $data['email_username'] !== null) {
            $object->setEmailUsername($this->denormalizer->denormalize($data['email_username'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('email_username', $data) && $data['email_username'] === null) {
            $object->setEmailUsername(null);
        }
        if (\array_key_exists('oidc_endpoint', $data) && $data['oidc_endpoint'] !== null) {
            $object->setOidcEndpoint($this->denormalizer->denormalize($data['oidc_endpoint'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('oidc_endpoint', $data) && $data['oidc_endpoint'] === null) {
            $object->setOidcEndpoint(null);
        }
        if (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] !== null) {
            $object->setLdapScope($data['ldap_scope']);
        } elseif (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] === null) {
            $object->setLdapScope(null);
        }
        if (\array_key_exists('count_per_project', $data) && $data['count_per_project'] !== null) {
            $object->setCountPerProject($this->denormalizer->denormalize($data['count_per_project'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        } elseif (\array_key_exists('count_per_project', $data) && $data['count_per_project'] === null) {
            $object->setCountPerProject(null);
        }
        if (\array_key_exists('token_expiration', $data) && $data['token_expiration'] !== null) {
            $object->setTokenExpiration($this->denormalizer->denormalize($data['token_expiration'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        } elseif (\array_key_exists('token_expiration', $data) && $data['token_expiration'] === null) {
            $object->setTokenExpiration(null);
        }
        if (\array_key_exists('ldap_group_search_scope', $data) && $data['ldap_group_search_scope'] !== null) {
            $object->setLdapGroupSearchScope($this->denormalizer->denormalize($data['ldap_group_search_scope'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        } elseif (\array_key_exists('ldap_group_search_scope', $data) && $data['ldap_group_search_scope'] === null) {
            $object->setLdapGroupSearchScope(null);
        }
        if (\array_key_exists('email_ssl', $data) && $data['email_ssl'] !== null) {
            $object->setEmailSsl($this->denormalizer->denormalize($data['email_ssl'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        } elseif (\array_key_exists('email_ssl', $data) && $data['email_ssl'] === null) {
            $object->setEmailSsl(null);
        }
        if (\array_key_exists('email_port', $data) && $data['email_port'] !== null) {
            $object->setEmailPort($this->denormalizer->denormalize($data['email_port'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        } elseif (\array_key_exists('email_port', $data) && $data['email_port'] === null) {
            $object->setEmailPort(null);
        }
        if (\array_key_exists('email_host', $data) && $data['email_host'] !== null) {
            $object->setEmailHost($this->denormalizer->denormalize($data['email_host'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        } elseif (\array_key_exists('email_host', $data) && $data['email_host'] === null) {
            $object->setEmailHost(null);
        }
        if (\array_key_exists('email_from', $data) && $data['email_from'] !== null) {
            $object->setEmailFrom($this->denormalizer->denormalize($data['email_from'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
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
            $data['oidc_verify_cert'] = $this->normalizer->normalize($object->getOidcVerifyCert(), 'json', $context);
        }
        if (null !== $object->getEmailIdentity()) {
            $data['email_identity'] = $this->normalizer->normalize($object->getEmailIdentity(), 'json', $context);
        }
        if (null !== $object->getLdapGroupSearchFilter()) {
            $data['ldap_group_search_filter'] = $this->normalizer->normalize($object->getLdapGroupSearchFilter(), 'json', $context);
        }
        if (null !== $object->getAuthMode()) {
            $data['auth_mode'] = $this->normalizer->normalize($object->getAuthMode(), 'json', $context);
        }
        if (null !== $object->getSelfRegistration()) {
            $data['self_registration'] = $this->normalizer->normalize($object->getSelfRegistration(), 'json', $context);
        }
        if (null !== $object->getOidcScope()) {
            $data['oidc_scope'] = $this->normalizer->normalize($object->getOidcScope(), 'json', $context);
        }
        if (null !== $object->getLdapSearchDn()) {
            $data['ldap_search_dn'] = $object->getLdapSearchDn();
        }
        if (null !== $object->getStoragePerProject()) {
            $data['storage_per_project'] = $this->normalizer->normalize($object->getStoragePerProject(), 'json', $context);
        }
        if (null !== $object->getScanAllPolicy()) {
            $data['scan_all_policy'] = $this->normalizer->normalize($object->getScanAllPolicy(), 'json', $context);
        }
        if (null !== $object->getVerifyRemoteCert()) {
            $data['verify_remote_cert'] = $this->normalizer->normalize($object->getVerifyRemoteCert(), 'json', $context);
        }
        if (null !== $object->getLdapTimeout()) {
            $data['ldap_timeout'] = $this->normalizer->normalize($object->getLdapTimeout(), 'json', $context);
        }
        if (null !== $object->getLdapBaseDn()) {
            $data['ldap_base_dn'] = $this->normalizer->normalize($object->getLdapBaseDn(), 'json', $context);
        }
        if (null !== $object->getLdapFilter()) {
            $data['ldap_filter'] = $this->normalizer->normalize($object->getLdapFilter(), 'json', $context);
        }
        if (null !== $object->getReadOnly()) {
            $data['read_only'] = $this->normalizer->normalize($object->getReadOnly(), 'json', $context);
        }
        if (null !== $object->getQuotaPerProjectEnable()) {
            $data['quota_per_project_enable'] = $this->normalizer->normalize($object->getQuotaPerProjectEnable(), 'json', $context);
        }
        if (null !== $object->getLdapUrl()) {
            $data['ldap_url'] = $this->normalizer->normalize($object->getLdapUrl(), 'json', $context);
        }
        if (null !== $object->getOidcName()) {
            $data['oidc_name'] = $this->normalizer->normalize($object->getOidcName(), 'json', $context);
        }
        if (null !== $object->getProjectCreationRestriction()) {
            $data['project_creation_restriction'] = $this->normalizer->normalize($object->getProjectCreationRestriction(), 'json', $context);
        }
        if (null !== $object->getLdapUid()) {
            $data['ldap_uid'] = $this->normalizer->normalize($object->getLdapUid(), 'json', $context);
        }
        if (null !== $object->getOidcClientId()) {
            $data['oidc_client_id'] = $this->normalizer->normalize($object->getOidcClientId(), 'json', $context);
        }
        if (null !== $object->getLdapGroupBaseDn()) {
            $data['ldap_group_base_dn'] = $this->normalizer->normalize($object->getLdapGroupBaseDn(), 'json', $context);
        }
        if (null !== $object->getLdapGroupAttributeName()) {
            $data['ldap_group_attribute_name'] = $this->normalizer->normalize($object->getLdapGroupAttributeName(), 'json', $context);
        }
        if (null !== $object->getEmailInsecure()) {
            $data['email_insecure'] = $this->normalizer->normalize($object->getEmailInsecure(), 'json', $context);
        }
        if (null !== $object->getLdapGroupAdminDn()) {
            $data['ldap_group_admin_dn'] = $this->normalizer->normalize($object->getLdapGroupAdminDn(), 'json', $context);
        }
        if (null !== $object->getEmailUsername()) {
            $data['email_username'] = $this->normalizer->normalize($object->getEmailUsername(), 'json', $context);
        }
        if (null !== $object->getOidcEndpoint()) {
            $data['oidc_endpoint'] = $this->normalizer->normalize($object->getOidcEndpoint(), 'json', $context);
        }
        if (null !== $object->getLdapScope()) {
            $data['ldap_scope'] = $object->getLdapScope();
        }
        if (null !== $object->getCountPerProject()) {
            $data['count_per_project'] = $this->normalizer->normalize($object->getCountPerProject(), 'json', $context);
        }
        if (null !== $object->getTokenExpiration()) {
            $data['token_expiration'] = $this->normalizer->normalize($object->getTokenExpiration(), 'json', $context);
        }
        if (null !== $object->getLdapGroupSearchScope()) {
            $data['ldap_group_search_scope'] = $this->normalizer->normalize($object->getLdapGroupSearchScope(), 'json', $context);
        }
        if (null !== $object->getEmailSsl()) {
            $data['email_ssl'] = $this->normalizer->normalize($object->getEmailSsl(), 'json', $context);
        }
        if (null !== $object->getEmailPort()) {
            $data['email_port'] = $this->normalizer->normalize($object->getEmailPort(), 'json', $context);
        }
        if (null !== $object->getEmailHost()) {
            $data['email_host'] = $this->normalizer->normalize($object->getEmailHost(), 'json', $context);
        }
        if (null !== $object->getEmailFrom()) {
            $data['email_from'] = $this->normalizer->normalize($object->getEmailFrom(), 'json', $context);
        }
        return $data;
    }
}
