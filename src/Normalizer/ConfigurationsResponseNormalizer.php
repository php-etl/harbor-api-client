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
        return $type === 'Harbor\\Api\\Model\\ConfigurationsResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\ConfigurationsResponse';
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
        $object = new \Harbor\Api\Model\ConfigurationsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('oidc_verify_cert', $data)) {
            $object->setOidcVerifyCert($this->denormalizer->denormalize($data['oidc_verify_cert'], 'Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        if (\array_key_exists('email_identity', $data)) {
            $object->setEmailIdentity($this->denormalizer->denormalize($data['email_identity'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_group_search_filter', $data)) {
            $object->setLdapGroupSearchFilter($this->denormalizer->denormalize($data['ldap_group_search_filter'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('auth_mode', $data)) {
            $object->setAuthMode($this->denormalizer->denormalize($data['auth_mode'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('self_registration', $data)) {
            $object->setSelfRegistration($this->denormalizer->denormalize($data['self_registration'], 'Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        if (\array_key_exists('oidc_scope', $data)) {
            $object->setOidcScope($this->denormalizer->denormalize($data['oidc_scope'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_search_dn', $data)) {
            $object->setLdapSearchDn($data['ldap_search_dn']);
        }
        if (\array_key_exists('storage_per_project', $data)) {
            $object->setStoragePerProject($this->denormalizer->denormalize($data['storage_per_project'], 'Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        if (\array_key_exists('scan_all_policy', $data)) {
            $object->setScanAllPolicy($this->denormalizer->denormalize($data['scan_all_policy'], 'Harbor\\Api\\Model\\ConfigurationsResponseScanAllPolicy', 'json', $context));
        }
        if (\array_key_exists('verify_remote_cert', $data)) {
            $object->setVerifyRemoteCert($this->denormalizer->denormalize($data['verify_remote_cert'], 'Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_timeout', $data)) {
            $object->setLdapTimeout($this->denormalizer->denormalize($data['ldap_timeout'], 'Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_base_dn', $data)) {
            $object->setLdapBaseDn($this->denormalizer->denormalize($data['ldap_base_dn'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_filter', $data)) {
            $object->setLdapFilter($this->denormalizer->denormalize($data['ldap_filter'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('read_only', $data)) {
            $object->setReadOnly($this->denormalizer->denormalize($data['read_only'], 'Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        if (\array_key_exists('quota_per_project_enable', $data)) {
            $object->setQuotaPerProjectEnable($this->denormalizer->denormalize($data['quota_per_project_enable'], 'Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_url', $data)) {
            $object->setLdapUrl($this->denormalizer->denormalize($data['ldap_url'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('oidc_name', $data)) {
            $object->setOidcName($this->denormalizer->denormalize($data['oidc_name'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('project_creation_restriction', $data)) {
            $object->setProjectCreationRestriction($this->denormalizer->denormalize($data['project_creation_restriction'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_uid', $data)) {
            $object->setLdapUid($this->denormalizer->denormalize($data['ldap_uid'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('oidc_client_id', $data)) {
            $object->setOidcClientId($this->denormalizer->denormalize($data['oidc_client_id'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_group_base_dn', $data)) {
            $object->setLdapGroupBaseDn($this->denormalizer->denormalize($data['ldap_group_base_dn'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_group_attribute_name', $data)) {
            $object->setLdapGroupAttributeName($this->denormalizer->denormalize($data['ldap_group_attribute_name'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('email_insecure', $data)) {
            $object->setEmailInsecure($this->denormalizer->denormalize($data['email_insecure'], 'Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_group_admin_dn', $data)) {
            $object->setLdapGroupAdminDn($this->denormalizer->denormalize($data['ldap_group_admin_dn'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('email_username', $data)) {
            $object->setEmailUsername($this->denormalizer->denormalize($data['email_username'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('oidc_endpoint', $data)) {
            $object->setOidcEndpoint($this->denormalizer->denormalize($data['oidc_endpoint'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_scope', $data)) {
            $object->setLdapScope($data['ldap_scope']);
        }
        if (\array_key_exists('count_per_project', $data)) {
            $object->setCountPerProject($this->denormalizer->denormalize($data['count_per_project'], 'Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        if (\array_key_exists('token_expiration', $data)) {
            $object->setTokenExpiration($this->denormalizer->denormalize($data['token_expiration'], 'Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        if (\array_key_exists('ldap_group_search_scope', $data)) {
            $object->setLdapGroupSearchScope($this->denormalizer->denormalize($data['ldap_group_search_scope'], 'Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        if (\array_key_exists('email_ssl', $data)) {
            $object->setEmailSsl($this->denormalizer->denormalize($data['email_ssl'], 'Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        if (\array_key_exists('email_port', $data)) {
            $object->setEmailPort($this->denormalizer->denormalize($data['email_port'], 'Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        if (\array_key_exists('email_host', $data)) {
            $object->setEmailHost($this->denormalizer->denormalize($data['email_host'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        if (\array_key_exists('email_from', $data)) {
            $object->setEmailFrom($this->denormalizer->denormalize($data['email_from'], 'Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
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