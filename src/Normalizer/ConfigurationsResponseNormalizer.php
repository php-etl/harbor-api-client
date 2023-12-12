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
        if (\array_key_exists('auth_mode', $data) && $data['auth_mode'] !== null) {
            $object->setAuthMode($this->denormalizer->denormalize($data['auth_mode'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('auth_mode', $data) && $data['auth_mode'] === null) {
            $object->setAuthMode(null);
        }
        if (\array_key_exists('primary_auth_mode', $data) && $data['primary_auth_mode'] !== null) {
            $object->setPrimaryAuthMode($this->denormalizer->denormalize($data['primary_auth_mode'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('primary_auth_mode', $data) && $data['primary_auth_mode'] === null) {
            $object->setPrimaryAuthMode(null);
        }
        if (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] !== null) {
            $object->setLdapBaseDn($this->denormalizer->denormalize($data['ldap_base_dn'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] === null) {
            $object->setLdapBaseDn(null);
        }
        if (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] !== null) {
            $object->setLdapFilter($this->denormalizer->denormalize($data['ldap_filter'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] === null) {
            $object->setLdapFilter(null);
        }
        if (\array_key_exists('ldap_group_base_dn', $data) && $data['ldap_group_base_dn'] !== null) {
            $object->setLdapGroupBaseDn($this->denormalizer->denormalize($data['ldap_group_base_dn'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_group_base_dn', $data) && $data['ldap_group_base_dn'] === null) {
            $object->setLdapGroupBaseDn(null);
        }
        if (\array_key_exists('ldap_group_admin_dn', $data) && $data['ldap_group_admin_dn'] !== null) {
            $object->setLdapGroupAdminDn($this->denormalizer->denormalize($data['ldap_group_admin_dn'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_group_admin_dn', $data) && $data['ldap_group_admin_dn'] === null) {
            $object->setLdapGroupAdminDn(null);
        }
        if (\array_key_exists('ldap_group_attribute_name', $data) && $data['ldap_group_attribute_name'] !== null) {
            $object->setLdapGroupAttributeName($this->denormalizer->denormalize($data['ldap_group_attribute_name'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_group_attribute_name', $data) && $data['ldap_group_attribute_name'] === null) {
            $object->setLdapGroupAttributeName(null);
        }
        if (\array_key_exists('ldap_group_search_filter', $data) && $data['ldap_group_search_filter'] !== null) {
            $object->setLdapGroupSearchFilter($this->denormalizer->denormalize($data['ldap_group_search_filter'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_group_search_filter', $data) && $data['ldap_group_search_filter'] === null) {
            $object->setLdapGroupSearchFilter(null);
        }
        if (\array_key_exists('ldap_group_search_scope', $data) && $data['ldap_group_search_scope'] !== null) {
            $object->setLdapGroupSearchScope($this->denormalizer->denormalize($data['ldap_group_search_scope'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_group_search_scope', $data) && $data['ldap_group_search_scope'] === null) {
            $object->setLdapGroupSearchScope(null);
        }
        if (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] !== null) {
            $object->setLdapScope($this->denormalizer->denormalize($data['ldap_scope'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] === null) {
            $object->setLdapScope(null);
        }
        if (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] !== null) {
            $object->setLdapSearchDn($this->denormalizer->denormalize($data['ldap_search_dn'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] === null) {
            $object->setLdapSearchDn(null);
        }
        if (\array_key_exists('ldap_timeout', $data) && $data['ldap_timeout'] !== null) {
            $object->setLdapTimeout($this->denormalizer->denormalize($data['ldap_timeout'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_timeout', $data) && $data['ldap_timeout'] === null) {
            $object->setLdapTimeout(null);
        }
        if (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] !== null) {
            $object->setLdapUid($this->denormalizer->denormalize($data['ldap_uid'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] === null) {
            $object->setLdapUid(null);
        }
        if (\array_key_exists('ldap_url', $data) && $data['ldap_url'] !== null) {
            $object->setLdapUrl($this->denormalizer->denormalize($data['ldap_url'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_url', $data) && $data['ldap_url'] === null) {
            $object->setLdapUrl(null);
        }
        if (\array_key_exists('ldap_verify_cert', $data) && $data['ldap_verify_cert'] !== null) {
            $object->setLdapVerifyCert($this->denormalizer->denormalize($data['ldap_verify_cert'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_verify_cert', $data) && $data['ldap_verify_cert'] === null) {
            $object->setLdapVerifyCert(null);
        }
        if (\array_key_exists('ldap_group_membership_attribute', $data) && $data['ldap_group_membership_attribute'] !== null) {
            $object->setLdapGroupMembershipAttribute($this->denormalizer->denormalize($data['ldap_group_membership_attribute'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('ldap_group_membership_attribute', $data) && $data['ldap_group_membership_attribute'] === null) {
            $object->setLdapGroupMembershipAttribute(null);
        }
        if (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] !== null) {
            $object->setProjectCreationRestriction($this->denormalizer->denormalize($data['project_creation_restriction'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] === null) {
            $object->setProjectCreationRestriction(null);
        }
        if (\array_key_exists('read_only', $data) && $data['read_only'] !== null) {
            $object->setReadOnly($this->denormalizer->denormalize($data['read_only'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('read_only', $data) && $data['read_only'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('self_registration', $data) && $data['self_registration'] !== null) {
            $object->setSelfRegistration($this->denormalizer->denormalize($data['self_registration'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('self_registration', $data) && $data['self_registration'] === null) {
            $object->setSelfRegistration(null);
        }
        if (\array_key_exists('token_expiration', $data) && $data['token_expiration'] !== null) {
            $object->setTokenExpiration($this->denormalizer->denormalize($data['token_expiration'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('token_expiration', $data) && $data['token_expiration'] === null) {
            $object->setTokenExpiration(null);
        }
        if (\array_key_exists('uaa_client_id', $data) && $data['uaa_client_id'] !== null) {
            $object->setUaaClientId($this->denormalizer->denormalize($data['uaa_client_id'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('uaa_client_id', $data) && $data['uaa_client_id'] === null) {
            $object->setUaaClientId(null);
        }
        if (\array_key_exists('uaa_client_secret', $data) && $data['uaa_client_secret'] !== null) {
            $object->setUaaClientSecret($this->denormalizer->denormalize($data['uaa_client_secret'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('uaa_client_secret', $data) && $data['uaa_client_secret'] === null) {
            $object->setUaaClientSecret(null);
        }
        if (\array_key_exists('uaa_endpoint', $data) && $data['uaa_endpoint'] !== null) {
            $object->setUaaEndpoint($this->denormalizer->denormalize($data['uaa_endpoint'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('uaa_endpoint', $data) && $data['uaa_endpoint'] === null) {
            $object->setUaaEndpoint(null);
        }
        if (\array_key_exists('uaa_verify_cert', $data) && $data['uaa_verify_cert'] !== null) {
            $object->setUaaVerifyCert($this->denormalizer->denormalize($data['uaa_verify_cert'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('uaa_verify_cert', $data) && $data['uaa_verify_cert'] === null) {
            $object->setUaaVerifyCert(null);
        }
        if (\array_key_exists('http_authproxy_endpoint', $data) && $data['http_authproxy_endpoint'] !== null) {
            $object->setHttpAuthproxyEndpoint($this->denormalizer->denormalize($data['http_authproxy_endpoint'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('http_authproxy_endpoint', $data) && $data['http_authproxy_endpoint'] === null) {
            $object->setHttpAuthproxyEndpoint(null);
        }
        if (\array_key_exists('http_authproxy_tokenreview_endpoint', $data) && $data['http_authproxy_tokenreview_endpoint'] !== null) {
            $object->setHttpAuthproxyTokenreviewEndpoint($this->denormalizer->denormalize($data['http_authproxy_tokenreview_endpoint'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('http_authproxy_tokenreview_endpoint', $data) && $data['http_authproxy_tokenreview_endpoint'] === null) {
            $object->setHttpAuthproxyTokenreviewEndpoint(null);
        }
        if (\array_key_exists('http_authproxy_admin_groups', $data) && $data['http_authproxy_admin_groups'] !== null) {
            $object->setHttpAuthproxyAdminGroups($this->denormalizer->denormalize($data['http_authproxy_admin_groups'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('http_authproxy_admin_groups', $data) && $data['http_authproxy_admin_groups'] === null) {
            $object->setHttpAuthproxyAdminGroups(null);
        }
        if (\array_key_exists('http_authproxy_admin_usernames', $data) && $data['http_authproxy_admin_usernames'] !== null) {
            $object->setHttpAuthproxyAdminUsernames($this->denormalizer->denormalize($data['http_authproxy_admin_usernames'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('http_authproxy_admin_usernames', $data) && $data['http_authproxy_admin_usernames'] === null) {
            $object->setHttpAuthproxyAdminUsernames(null);
        }
        if (\array_key_exists('http_authproxy_verify_cert', $data) && $data['http_authproxy_verify_cert'] !== null) {
            $object->setHttpAuthproxyVerifyCert($this->denormalizer->denormalize($data['http_authproxy_verify_cert'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('http_authproxy_verify_cert', $data) && $data['http_authproxy_verify_cert'] === null) {
            $object->setHttpAuthproxyVerifyCert(null);
        }
        if (\array_key_exists('http_authproxy_skip_search', $data) && $data['http_authproxy_skip_search'] !== null) {
            $object->setHttpAuthproxySkipSearch($this->denormalizer->denormalize($data['http_authproxy_skip_search'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('http_authproxy_skip_search', $data) && $data['http_authproxy_skip_search'] === null) {
            $object->setHttpAuthproxySkipSearch(null);
        }
        if (\array_key_exists('http_authproxy_server_certificate', $data) && $data['http_authproxy_server_certificate'] !== null) {
            $object->setHttpAuthproxyServerCertificate($this->denormalizer->denormalize($data['http_authproxy_server_certificate'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('http_authproxy_server_certificate', $data) && $data['http_authproxy_server_certificate'] === null) {
            $object->setHttpAuthproxyServerCertificate(null);
        }
        if (\array_key_exists('oidc_name', $data) && $data['oidc_name'] !== null) {
            $object->setOidcName($this->denormalizer->denormalize($data['oidc_name'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_name', $data) && $data['oidc_name'] === null) {
            $object->setOidcName(null);
        }
        if (\array_key_exists('oidc_endpoint', $data) && $data['oidc_endpoint'] !== null) {
            $object->setOidcEndpoint($this->denormalizer->denormalize($data['oidc_endpoint'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_endpoint', $data) && $data['oidc_endpoint'] === null) {
            $object->setOidcEndpoint(null);
        }
        if (\array_key_exists('oidc_client_id', $data) && $data['oidc_client_id'] !== null) {
            $object->setOidcClientId($this->denormalizer->denormalize($data['oidc_client_id'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_client_id', $data) && $data['oidc_client_id'] === null) {
            $object->setOidcClientId(null);
        }
        if (\array_key_exists('oidc_groups_claim', $data) && $data['oidc_groups_claim'] !== null) {
            $object->setOidcGroupsClaim($this->denormalizer->denormalize($data['oidc_groups_claim'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_groups_claim', $data) && $data['oidc_groups_claim'] === null) {
            $object->setOidcGroupsClaim(null);
        }
        if (\array_key_exists('oidc_admin_group', $data) && $data['oidc_admin_group'] !== null) {
            $object->setOidcAdminGroup($this->denormalizer->denormalize($data['oidc_admin_group'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_admin_group', $data) && $data['oidc_admin_group'] === null) {
            $object->setOidcAdminGroup(null);
        }
        if (\array_key_exists('oidc_group_filter', $data) && $data['oidc_group_filter'] !== null) {
            $object->setOidcGroupFilter($this->denormalizer->denormalize($data['oidc_group_filter'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_group_filter', $data) && $data['oidc_group_filter'] === null) {
            $object->setOidcGroupFilter(null);
        }
        if (\array_key_exists('oidc_scope', $data) && $data['oidc_scope'] !== null) {
            $object->setOidcScope($this->denormalizer->denormalize($data['oidc_scope'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_scope', $data) && $data['oidc_scope'] === null) {
            $object->setOidcScope(null);
        }
        if (\array_key_exists('oidc_user_claim', $data) && $data['oidc_user_claim'] !== null) {
            $object->setOidcUserClaim($this->denormalizer->denormalize($data['oidc_user_claim'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_user_claim', $data) && $data['oidc_user_claim'] === null) {
            $object->setOidcUserClaim(null);
        }
        if (\array_key_exists('oidc_verify_cert', $data) && $data['oidc_verify_cert'] !== null) {
            $object->setOidcVerifyCert($this->denormalizer->denormalize($data['oidc_verify_cert'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_verify_cert', $data) && $data['oidc_verify_cert'] === null) {
            $object->setOidcVerifyCert(null);
        }
        if (\array_key_exists('oidc_auto_onboard', $data) && $data['oidc_auto_onboard'] !== null) {
            $object->setOidcAutoOnboard($this->denormalizer->denormalize($data['oidc_auto_onboard'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_auto_onboard', $data) && $data['oidc_auto_onboard'] === null) {
            $object->setOidcAutoOnboard(null);
        }
        if (\array_key_exists('oidc_extra_redirect_parms', $data) && $data['oidc_extra_redirect_parms'] !== null) {
            $object->setOidcExtraRedirectParms($this->denormalizer->denormalize($data['oidc_extra_redirect_parms'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('oidc_extra_redirect_parms', $data) && $data['oidc_extra_redirect_parms'] === null) {
            $object->setOidcExtraRedirectParms(null);
        }
        if (\array_key_exists('robot_token_duration', $data) && $data['robot_token_duration'] !== null) {
            $object->setRobotTokenDuration($this->denormalizer->denormalize($data['robot_token_duration'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('robot_token_duration', $data) && $data['robot_token_duration'] === null) {
            $object->setRobotTokenDuration(null);
        }
        if (\array_key_exists('robot_name_prefix', $data) && $data['robot_name_prefix'] !== null) {
            $object->setRobotNamePrefix($this->denormalizer->denormalize($data['robot_name_prefix'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('robot_name_prefix', $data) && $data['robot_name_prefix'] === null) {
            $object->setRobotNamePrefix(null);
        }
        if (\array_key_exists('notification_enable', $data) && $data['notification_enable'] !== null) {
            $object->setNotificationEnable($this->denormalizer->denormalize($data['notification_enable'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('notification_enable', $data) && $data['notification_enable'] === null) {
            $object->setNotificationEnable(null);
        }
        if (\array_key_exists('quota_per_project_enable', $data) && $data['quota_per_project_enable'] !== null) {
            $object->setQuotaPerProjectEnable($this->denormalizer->denormalize($data['quota_per_project_enable'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('quota_per_project_enable', $data) && $data['quota_per_project_enable'] === null) {
            $object->setQuotaPerProjectEnable(null);
        }
        if (\array_key_exists('storage_per_project', $data) && $data['storage_per_project'] !== null) {
            $object->setStoragePerProject($this->denormalizer->denormalize($data['storage_per_project'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('storage_per_project', $data) && $data['storage_per_project'] === null) {
            $object->setStoragePerProject(null);
        }
        if (\array_key_exists('audit_log_forward_endpoint', $data) && $data['audit_log_forward_endpoint'] !== null) {
            $object->setAuditLogForwardEndpoint($this->denormalizer->denormalize($data['audit_log_forward_endpoint'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('audit_log_forward_endpoint', $data) && $data['audit_log_forward_endpoint'] === null) {
            $object->setAuditLogForwardEndpoint(null);
        }
        if (\array_key_exists('skip_audit_log_database', $data) && $data['skip_audit_log_database'] !== null) {
            $object->setSkipAuditLogDatabase($this->denormalizer->denormalize($data['skip_audit_log_database'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('skip_audit_log_database', $data) && $data['skip_audit_log_database'] === null) {
            $object->setSkipAuditLogDatabase(null);
        }
        if (\array_key_exists('scanner_skip_update_pulltime', $data) && $data['scanner_skip_update_pulltime'] !== null) {
            $object->setScannerSkipUpdatePulltime($this->denormalizer->denormalize($data['scanner_skip_update_pulltime'], 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('scanner_skip_update_pulltime', $data) && $data['scanner_skip_update_pulltime'] === null) {
            $object->setScannerSkipUpdatePulltime(null);
        }
        if (\array_key_exists('scan_all_policy', $data) && $data['scan_all_policy'] !== null) {
            $object->setScanAllPolicy($this->denormalizer->denormalize($data['scan_all_policy'], 'Gyroscops\\Harbor\\Api\\Model\\ConfigurationsResponseScanAllPolicy', 'json', $context));
        }
        elseif (\array_key_exists('scan_all_policy', $data) && $data['scan_all_policy'] === null) {
            $object->setScanAllPolicy(null);
        }
        if (\array_key_exists('session_timeout', $data) && $data['session_timeout'] !== null) {
            $object->setSessionTimeout($this->denormalizer->denormalize($data['session_timeout'], 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('session_timeout', $data) && $data['session_timeout'] === null) {
            $object->setSessionTimeout(null);
        }
        if (\array_key_exists('banner_message', $data) && $data['banner_message'] !== null) {
            $object->setBannerMessage($this->denormalizer->denormalize($data['banner_message'], 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem', 'json', $context));
        }
        elseif (\array_key_exists('banner_message', $data) && $data['banner_message'] === null) {
            $object->setBannerMessage(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAuthMode()) {
            $data['auth_mode'] = $this->normalizer->normalize($object->getAuthMode(), 'json', $context);
        }
        if (null !== $object->getPrimaryAuthMode()) {
            $data['primary_auth_mode'] = $this->normalizer->normalize($object->getPrimaryAuthMode(), 'json', $context);
        }
        if (null !== $object->getLdapBaseDn()) {
            $data['ldap_base_dn'] = $this->normalizer->normalize($object->getLdapBaseDn(), 'json', $context);
        }
        if (null !== $object->getLdapFilter()) {
            $data['ldap_filter'] = $this->normalizer->normalize($object->getLdapFilter(), 'json', $context);
        }
        if (null !== $object->getLdapGroupBaseDn()) {
            $data['ldap_group_base_dn'] = $this->normalizer->normalize($object->getLdapGroupBaseDn(), 'json', $context);
        }
        if (null !== $object->getLdapGroupAdminDn()) {
            $data['ldap_group_admin_dn'] = $this->normalizer->normalize($object->getLdapGroupAdminDn(), 'json', $context);
        }
        if (null !== $object->getLdapGroupAttributeName()) {
            $data['ldap_group_attribute_name'] = $this->normalizer->normalize($object->getLdapGroupAttributeName(), 'json', $context);
        }
        if (null !== $object->getLdapGroupSearchFilter()) {
            $data['ldap_group_search_filter'] = $this->normalizer->normalize($object->getLdapGroupSearchFilter(), 'json', $context);
        }
        if (null !== $object->getLdapGroupSearchScope()) {
            $data['ldap_group_search_scope'] = $this->normalizer->normalize($object->getLdapGroupSearchScope(), 'json', $context);
        }
        if (null !== $object->getLdapScope()) {
            $data['ldap_scope'] = $this->normalizer->normalize($object->getLdapScope(), 'json', $context);
        }
        if (null !== $object->getLdapSearchDn()) {
            $data['ldap_search_dn'] = $this->normalizer->normalize($object->getLdapSearchDn(), 'json', $context);
        }
        if (null !== $object->getLdapTimeout()) {
            $data['ldap_timeout'] = $this->normalizer->normalize($object->getLdapTimeout(), 'json', $context);
        }
        if (null !== $object->getLdapUid()) {
            $data['ldap_uid'] = $this->normalizer->normalize($object->getLdapUid(), 'json', $context);
        }
        if (null !== $object->getLdapUrl()) {
            $data['ldap_url'] = $this->normalizer->normalize($object->getLdapUrl(), 'json', $context);
        }
        if (null !== $object->getLdapVerifyCert()) {
            $data['ldap_verify_cert'] = $this->normalizer->normalize($object->getLdapVerifyCert(), 'json', $context);
        }
        if (null !== $object->getLdapGroupMembershipAttribute()) {
            $data['ldap_group_membership_attribute'] = $this->normalizer->normalize($object->getLdapGroupMembershipAttribute(), 'json', $context);
        }
        if (null !== $object->getProjectCreationRestriction()) {
            $data['project_creation_restriction'] = $this->normalizer->normalize($object->getProjectCreationRestriction(), 'json', $context);
        }
        if (null !== $object->getReadOnly()) {
            $data['read_only'] = $this->normalizer->normalize($object->getReadOnly(), 'json', $context);
        }
        if (null !== $object->getSelfRegistration()) {
            $data['self_registration'] = $this->normalizer->normalize($object->getSelfRegistration(), 'json', $context);
        }
        if (null !== $object->getTokenExpiration()) {
            $data['token_expiration'] = $this->normalizer->normalize($object->getTokenExpiration(), 'json', $context);
        }
        if (null !== $object->getUaaClientId()) {
            $data['uaa_client_id'] = $this->normalizer->normalize($object->getUaaClientId(), 'json', $context);
        }
        if (null !== $object->getUaaClientSecret()) {
            $data['uaa_client_secret'] = $this->normalizer->normalize($object->getUaaClientSecret(), 'json', $context);
        }
        if (null !== $object->getUaaEndpoint()) {
            $data['uaa_endpoint'] = $this->normalizer->normalize($object->getUaaEndpoint(), 'json', $context);
        }
        if (null !== $object->getUaaVerifyCert()) {
            $data['uaa_verify_cert'] = $this->normalizer->normalize($object->getUaaVerifyCert(), 'json', $context);
        }
        if (null !== $object->getHttpAuthproxyEndpoint()) {
            $data['http_authproxy_endpoint'] = $this->normalizer->normalize($object->getHttpAuthproxyEndpoint(), 'json', $context);
        }
        if (null !== $object->getHttpAuthproxyTokenreviewEndpoint()) {
            $data['http_authproxy_tokenreview_endpoint'] = $this->normalizer->normalize($object->getHttpAuthproxyTokenreviewEndpoint(), 'json', $context);
        }
        if (null !== $object->getHttpAuthproxyAdminGroups()) {
            $data['http_authproxy_admin_groups'] = $this->normalizer->normalize($object->getHttpAuthproxyAdminGroups(), 'json', $context);
        }
        if (null !== $object->getHttpAuthproxyAdminUsernames()) {
            $data['http_authproxy_admin_usernames'] = $this->normalizer->normalize($object->getHttpAuthproxyAdminUsernames(), 'json', $context);
        }
        if (null !== $object->getHttpAuthproxyVerifyCert()) {
            $data['http_authproxy_verify_cert'] = $this->normalizer->normalize($object->getHttpAuthproxyVerifyCert(), 'json', $context);
        }
        if (null !== $object->getHttpAuthproxySkipSearch()) {
            $data['http_authproxy_skip_search'] = $this->normalizer->normalize($object->getHttpAuthproxySkipSearch(), 'json', $context);
        }
        if (null !== $object->getHttpAuthproxyServerCertificate()) {
            $data['http_authproxy_server_certificate'] = $this->normalizer->normalize($object->getHttpAuthproxyServerCertificate(), 'json', $context);
        }
        if (null !== $object->getOidcName()) {
            $data['oidc_name'] = $this->normalizer->normalize($object->getOidcName(), 'json', $context);
        }
        if (null !== $object->getOidcEndpoint()) {
            $data['oidc_endpoint'] = $this->normalizer->normalize($object->getOidcEndpoint(), 'json', $context);
        }
        if (null !== $object->getOidcClientId()) {
            $data['oidc_client_id'] = $this->normalizer->normalize($object->getOidcClientId(), 'json', $context);
        }
        if (null !== $object->getOidcGroupsClaim()) {
            $data['oidc_groups_claim'] = $this->normalizer->normalize($object->getOidcGroupsClaim(), 'json', $context);
        }
        if (null !== $object->getOidcAdminGroup()) {
            $data['oidc_admin_group'] = $this->normalizer->normalize($object->getOidcAdminGroup(), 'json', $context);
        }
        if (null !== $object->getOidcGroupFilter()) {
            $data['oidc_group_filter'] = $this->normalizer->normalize($object->getOidcGroupFilter(), 'json', $context);
        }
        if (null !== $object->getOidcScope()) {
            $data['oidc_scope'] = $this->normalizer->normalize($object->getOidcScope(), 'json', $context);
        }
        if (null !== $object->getOidcUserClaim()) {
            $data['oidc_user_claim'] = $this->normalizer->normalize($object->getOidcUserClaim(), 'json', $context);
        }
        if (null !== $object->getOidcVerifyCert()) {
            $data['oidc_verify_cert'] = $this->normalizer->normalize($object->getOidcVerifyCert(), 'json', $context);
        }
        if (null !== $object->getOidcAutoOnboard()) {
            $data['oidc_auto_onboard'] = $this->normalizer->normalize($object->getOidcAutoOnboard(), 'json', $context);
        }
        if (null !== $object->getOidcExtraRedirectParms()) {
            $data['oidc_extra_redirect_parms'] = $this->normalizer->normalize($object->getOidcExtraRedirectParms(), 'json', $context);
        }
        if (null !== $object->getRobotTokenDuration()) {
            $data['robot_token_duration'] = $this->normalizer->normalize($object->getRobotTokenDuration(), 'json', $context);
        }
        if (null !== $object->getRobotNamePrefix()) {
            $data['robot_name_prefix'] = $this->normalizer->normalize($object->getRobotNamePrefix(), 'json', $context);
        }
        if (null !== $object->getNotificationEnable()) {
            $data['notification_enable'] = $this->normalizer->normalize($object->getNotificationEnable(), 'json', $context);
        }
        if (null !== $object->getQuotaPerProjectEnable()) {
            $data['quota_per_project_enable'] = $this->normalizer->normalize($object->getQuotaPerProjectEnable(), 'json', $context);
        }
        if (null !== $object->getStoragePerProject()) {
            $data['storage_per_project'] = $this->normalizer->normalize($object->getStoragePerProject(), 'json', $context);
        }
        if (null !== $object->getAuditLogForwardEndpoint()) {
            $data['audit_log_forward_endpoint'] = $this->normalizer->normalize($object->getAuditLogForwardEndpoint(), 'json', $context);
        }
        if (null !== $object->getSkipAuditLogDatabase()) {
            $data['skip_audit_log_database'] = $this->normalizer->normalize($object->getSkipAuditLogDatabase(), 'json', $context);
        }
        if (null !== $object->getScannerSkipUpdatePulltime()) {
            $data['scanner_skip_update_pulltime'] = $this->normalizer->normalize($object->getScannerSkipUpdatePulltime(), 'json', $context);
        }
        if (null !== $object->getScanAllPolicy()) {
            $data['scan_all_policy'] = $this->normalizer->normalize($object->getScanAllPolicy(), 'json', $context);
        }
        if (null !== $object->getSessionTimeout()) {
            $data['session_timeout'] = $this->normalizer->normalize($object->getSessionTimeout(), 'json', $context);
        }
        if (null !== $object->getBannerMessage()) {
            $data['banner_message'] = $this->normalizer->normalize($object->getBannerMessage(), 'json', $context);
        }
        return $data;
    }
}