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
        if (\array_key_exists('auth_mode', $data) && $data['auth_mode'] !== null) {
            $object->setAuthMode($data['auth_mode']);
        }
        elseif (\array_key_exists('auth_mode', $data) && $data['auth_mode'] === null) {
            $object->setAuthMode(null);
        }
        if (\array_key_exists('primary_auth_mode', $data) && $data['primary_auth_mode'] !== null) {
            $object->setPrimaryAuthMode($data['primary_auth_mode']);
        }
        elseif (\array_key_exists('primary_auth_mode', $data) && $data['primary_auth_mode'] === null) {
            $object->setPrimaryAuthMode(null);
        }
        if (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] !== null) {
            $object->setLdapBaseDn($data['ldap_base_dn']);
        }
        elseif (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] === null) {
            $object->setLdapBaseDn(null);
        }
        if (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] !== null) {
            $object->setLdapFilter($data['ldap_filter']);
        }
        elseif (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] === null) {
            $object->setLdapFilter(null);
        }
        if (\array_key_exists('ldap_group_base_dn', $data) && $data['ldap_group_base_dn'] !== null) {
            $object->setLdapGroupBaseDn($data['ldap_group_base_dn']);
        }
        elseif (\array_key_exists('ldap_group_base_dn', $data) && $data['ldap_group_base_dn'] === null) {
            $object->setLdapGroupBaseDn(null);
        }
        if (\array_key_exists('ldap_group_admin_dn', $data) && $data['ldap_group_admin_dn'] !== null) {
            $object->setLdapGroupAdminDn($data['ldap_group_admin_dn']);
        }
        elseif (\array_key_exists('ldap_group_admin_dn', $data) && $data['ldap_group_admin_dn'] === null) {
            $object->setLdapGroupAdminDn(null);
        }
        if (\array_key_exists('ldap_group_attribute_name', $data) && $data['ldap_group_attribute_name'] !== null) {
            $object->setLdapGroupAttributeName($data['ldap_group_attribute_name']);
        }
        elseif (\array_key_exists('ldap_group_attribute_name', $data) && $data['ldap_group_attribute_name'] === null) {
            $object->setLdapGroupAttributeName(null);
        }
        if (\array_key_exists('ldap_group_search_filter', $data) && $data['ldap_group_search_filter'] !== null) {
            $object->setLdapGroupSearchFilter($data['ldap_group_search_filter']);
        }
        elseif (\array_key_exists('ldap_group_search_filter', $data) && $data['ldap_group_search_filter'] === null) {
            $object->setLdapGroupSearchFilter(null);
        }
        if (\array_key_exists('ldap_group_search_scope', $data) && $data['ldap_group_search_scope'] !== null) {
            $object->setLdapGroupSearchScope($data['ldap_group_search_scope']);
        }
        elseif (\array_key_exists('ldap_group_search_scope', $data) && $data['ldap_group_search_scope'] === null) {
            $object->setLdapGroupSearchScope(null);
        }
        if (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] !== null) {
            $object->setLdapScope($data['ldap_scope']);
        }
        elseif (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] === null) {
            $object->setLdapScope(null);
        }
        if (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] !== null) {
            $object->setLdapSearchDn($data['ldap_search_dn']);
        }
        elseif (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] === null) {
            $object->setLdapSearchDn(null);
        }
        if (\array_key_exists('ldap_search_password', $data) && $data['ldap_search_password'] !== null) {
            $object->setLdapSearchPassword($data['ldap_search_password']);
        }
        elseif (\array_key_exists('ldap_search_password', $data) && $data['ldap_search_password'] === null) {
            $object->setLdapSearchPassword(null);
        }
        if (\array_key_exists('ldap_timeout', $data) && $data['ldap_timeout'] !== null) {
            $object->setLdapTimeout($data['ldap_timeout']);
        }
        elseif (\array_key_exists('ldap_timeout', $data) && $data['ldap_timeout'] === null) {
            $object->setLdapTimeout(null);
        }
        if (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] !== null) {
            $object->setLdapUid($data['ldap_uid']);
        }
        elseif (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] === null) {
            $object->setLdapUid(null);
        }
        if (\array_key_exists('ldap_url', $data) && $data['ldap_url'] !== null) {
            $object->setLdapUrl($data['ldap_url']);
        }
        elseif (\array_key_exists('ldap_url', $data) && $data['ldap_url'] === null) {
            $object->setLdapUrl(null);
        }
        if (\array_key_exists('ldap_verify_cert', $data) && $data['ldap_verify_cert'] !== null) {
            $object->setLdapVerifyCert($data['ldap_verify_cert']);
        }
        elseif (\array_key_exists('ldap_verify_cert', $data) && $data['ldap_verify_cert'] === null) {
            $object->setLdapVerifyCert(null);
        }
        if (\array_key_exists('ldap_group_membership_attribute', $data) && $data['ldap_group_membership_attribute'] !== null) {
            $object->setLdapGroupMembershipAttribute($data['ldap_group_membership_attribute']);
        }
        elseif (\array_key_exists('ldap_group_membership_attribute', $data) && $data['ldap_group_membership_attribute'] === null) {
            $object->setLdapGroupMembershipAttribute(null);
        }
        if (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] !== null) {
            $object->setProjectCreationRestriction($data['project_creation_restriction']);
        }
        elseif (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] === null) {
            $object->setProjectCreationRestriction(null);
        }
        if (\array_key_exists('read_only', $data) && $data['read_only'] !== null) {
            $object->setReadOnly($data['read_only']);
        }
        elseif (\array_key_exists('read_only', $data) && $data['read_only'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('self_registration', $data) && $data['self_registration'] !== null) {
            $object->setSelfRegistration($data['self_registration']);
        }
        elseif (\array_key_exists('self_registration', $data) && $data['self_registration'] === null) {
            $object->setSelfRegistration(null);
        }
        if (\array_key_exists('token_expiration', $data) && $data['token_expiration'] !== null) {
            $object->setTokenExpiration($data['token_expiration']);
        }
        elseif (\array_key_exists('token_expiration', $data) && $data['token_expiration'] === null) {
            $object->setTokenExpiration(null);
        }
        if (\array_key_exists('uaa_client_id', $data) && $data['uaa_client_id'] !== null) {
            $object->setUaaClientId($data['uaa_client_id']);
        }
        elseif (\array_key_exists('uaa_client_id', $data) && $data['uaa_client_id'] === null) {
            $object->setUaaClientId(null);
        }
        if (\array_key_exists('uaa_client_secret', $data) && $data['uaa_client_secret'] !== null) {
            $object->setUaaClientSecret($data['uaa_client_secret']);
        }
        elseif (\array_key_exists('uaa_client_secret', $data) && $data['uaa_client_secret'] === null) {
            $object->setUaaClientSecret(null);
        }
        if (\array_key_exists('uaa_endpoint', $data) && $data['uaa_endpoint'] !== null) {
            $object->setUaaEndpoint($data['uaa_endpoint']);
        }
        elseif (\array_key_exists('uaa_endpoint', $data) && $data['uaa_endpoint'] === null) {
            $object->setUaaEndpoint(null);
        }
        if (\array_key_exists('uaa_verify_cert', $data) && $data['uaa_verify_cert'] !== null) {
            $object->setUaaVerifyCert($data['uaa_verify_cert']);
        }
        elseif (\array_key_exists('uaa_verify_cert', $data) && $data['uaa_verify_cert'] === null) {
            $object->setUaaVerifyCert(null);
        }
        if (\array_key_exists('http_authproxy_endpoint', $data) && $data['http_authproxy_endpoint'] !== null) {
            $object->setHttpAuthproxyEndpoint($data['http_authproxy_endpoint']);
        }
        elseif (\array_key_exists('http_authproxy_endpoint', $data) && $data['http_authproxy_endpoint'] === null) {
            $object->setHttpAuthproxyEndpoint(null);
        }
        if (\array_key_exists('http_authproxy_tokenreview_endpoint', $data) && $data['http_authproxy_tokenreview_endpoint'] !== null) {
            $object->setHttpAuthproxyTokenreviewEndpoint($data['http_authproxy_tokenreview_endpoint']);
        }
        elseif (\array_key_exists('http_authproxy_tokenreview_endpoint', $data) && $data['http_authproxy_tokenreview_endpoint'] === null) {
            $object->setHttpAuthproxyTokenreviewEndpoint(null);
        }
        if (\array_key_exists('http_authproxy_admin_groups', $data) && $data['http_authproxy_admin_groups'] !== null) {
            $object->setHttpAuthproxyAdminGroups($data['http_authproxy_admin_groups']);
        }
        elseif (\array_key_exists('http_authproxy_admin_groups', $data) && $data['http_authproxy_admin_groups'] === null) {
            $object->setHttpAuthproxyAdminGroups(null);
        }
        if (\array_key_exists('http_authproxy_admin_usernames', $data) && $data['http_authproxy_admin_usernames'] !== null) {
            $object->setHttpAuthproxyAdminUsernames($data['http_authproxy_admin_usernames']);
        }
        elseif (\array_key_exists('http_authproxy_admin_usernames', $data) && $data['http_authproxy_admin_usernames'] === null) {
            $object->setHttpAuthproxyAdminUsernames(null);
        }
        if (\array_key_exists('http_authproxy_verify_cert', $data) && $data['http_authproxy_verify_cert'] !== null) {
            $object->setHttpAuthproxyVerifyCert($data['http_authproxy_verify_cert']);
        }
        elseif (\array_key_exists('http_authproxy_verify_cert', $data) && $data['http_authproxy_verify_cert'] === null) {
            $object->setHttpAuthproxyVerifyCert(null);
        }
        if (\array_key_exists('http_authproxy_skip_search', $data) && $data['http_authproxy_skip_search'] !== null) {
            $object->setHttpAuthproxySkipSearch($data['http_authproxy_skip_search']);
        }
        elseif (\array_key_exists('http_authproxy_skip_search', $data) && $data['http_authproxy_skip_search'] === null) {
            $object->setHttpAuthproxySkipSearch(null);
        }
        if (\array_key_exists('http_authproxy_server_certificate', $data) && $data['http_authproxy_server_certificate'] !== null) {
            $object->setHttpAuthproxyServerCertificate($data['http_authproxy_server_certificate']);
        }
        elseif (\array_key_exists('http_authproxy_server_certificate', $data) && $data['http_authproxy_server_certificate'] === null) {
            $object->setHttpAuthproxyServerCertificate(null);
        }
        if (\array_key_exists('oidc_name', $data) && $data['oidc_name'] !== null) {
            $object->setOidcName($data['oidc_name']);
        }
        elseif (\array_key_exists('oidc_name', $data) && $data['oidc_name'] === null) {
            $object->setOidcName(null);
        }
        if (\array_key_exists('oidc_endpoint', $data) && $data['oidc_endpoint'] !== null) {
            $object->setOidcEndpoint($data['oidc_endpoint']);
        }
        elseif (\array_key_exists('oidc_endpoint', $data) && $data['oidc_endpoint'] === null) {
            $object->setOidcEndpoint(null);
        }
        if (\array_key_exists('oidc_client_id', $data) && $data['oidc_client_id'] !== null) {
            $object->setOidcClientId($data['oidc_client_id']);
        }
        elseif (\array_key_exists('oidc_client_id', $data) && $data['oidc_client_id'] === null) {
            $object->setOidcClientId(null);
        }
        if (\array_key_exists('oidc_client_secret', $data) && $data['oidc_client_secret'] !== null) {
            $object->setOidcClientSecret($data['oidc_client_secret']);
        }
        elseif (\array_key_exists('oidc_client_secret', $data) && $data['oidc_client_secret'] === null) {
            $object->setOidcClientSecret(null);
        }
        if (\array_key_exists('oidc_groups_claim', $data) && $data['oidc_groups_claim'] !== null) {
            $object->setOidcGroupsClaim($data['oidc_groups_claim']);
        }
        elseif (\array_key_exists('oidc_groups_claim', $data) && $data['oidc_groups_claim'] === null) {
            $object->setOidcGroupsClaim(null);
        }
        if (\array_key_exists('oidc_admin_group', $data) && $data['oidc_admin_group'] !== null) {
            $object->setOidcAdminGroup($data['oidc_admin_group']);
        }
        elseif (\array_key_exists('oidc_admin_group', $data) && $data['oidc_admin_group'] === null) {
            $object->setOidcAdminGroup(null);
        }
        if (\array_key_exists('oidc_group_filter', $data) && $data['oidc_group_filter'] !== null) {
            $object->setOidcGroupFilter($data['oidc_group_filter']);
        }
        elseif (\array_key_exists('oidc_group_filter', $data) && $data['oidc_group_filter'] === null) {
            $object->setOidcGroupFilter(null);
        }
        if (\array_key_exists('oidc_scope', $data) && $data['oidc_scope'] !== null) {
            $object->setOidcScope($data['oidc_scope']);
        }
        elseif (\array_key_exists('oidc_scope', $data) && $data['oidc_scope'] === null) {
            $object->setOidcScope(null);
        }
        if (\array_key_exists('oidc_user_claim', $data) && $data['oidc_user_claim'] !== null) {
            $object->setOidcUserClaim($data['oidc_user_claim']);
        }
        elseif (\array_key_exists('oidc_user_claim', $data) && $data['oidc_user_claim'] === null) {
            $object->setOidcUserClaim(null);
        }
        if (\array_key_exists('oidc_verify_cert', $data) && $data['oidc_verify_cert'] !== null) {
            $object->setOidcVerifyCert($data['oidc_verify_cert']);
        }
        elseif (\array_key_exists('oidc_verify_cert', $data) && $data['oidc_verify_cert'] === null) {
            $object->setOidcVerifyCert(null);
        }
        if (\array_key_exists('oidc_auto_onboard', $data) && $data['oidc_auto_onboard'] !== null) {
            $object->setOidcAutoOnboard($data['oidc_auto_onboard']);
        }
        elseif (\array_key_exists('oidc_auto_onboard', $data) && $data['oidc_auto_onboard'] === null) {
            $object->setOidcAutoOnboard(null);
        }
        if (\array_key_exists('oidc_extra_redirect_parms', $data) && $data['oidc_extra_redirect_parms'] !== null) {
            $object->setOidcExtraRedirectParms($data['oidc_extra_redirect_parms']);
        }
        elseif (\array_key_exists('oidc_extra_redirect_parms', $data) && $data['oidc_extra_redirect_parms'] === null) {
            $object->setOidcExtraRedirectParms(null);
        }
        if (\array_key_exists('robot_token_duration', $data) && $data['robot_token_duration'] !== null) {
            $object->setRobotTokenDuration($data['robot_token_duration']);
        }
        elseif (\array_key_exists('robot_token_duration', $data) && $data['robot_token_duration'] === null) {
            $object->setRobotTokenDuration(null);
        }
        if (\array_key_exists('robot_name_prefix', $data) && $data['robot_name_prefix'] !== null) {
            $object->setRobotNamePrefix($data['robot_name_prefix']);
        }
        elseif (\array_key_exists('robot_name_prefix', $data) && $data['robot_name_prefix'] === null) {
            $object->setRobotNamePrefix(null);
        }
        if (\array_key_exists('notification_enable', $data) && $data['notification_enable'] !== null) {
            $object->setNotificationEnable($data['notification_enable']);
        }
        elseif (\array_key_exists('notification_enable', $data) && $data['notification_enable'] === null) {
            $object->setNotificationEnable(null);
        }
        if (\array_key_exists('quota_per_project_enable', $data) && $data['quota_per_project_enable'] !== null) {
            $object->setQuotaPerProjectEnable($data['quota_per_project_enable']);
        }
        elseif (\array_key_exists('quota_per_project_enable', $data) && $data['quota_per_project_enable'] === null) {
            $object->setQuotaPerProjectEnable(null);
        }
        if (\array_key_exists('storage_per_project', $data) && $data['storage_per_project'] !== null) {
            $object->setStoragePerProject($data['storage_per_project']);
        }
        elseif (\array_key_exists('storage_per_project', $data) && $data['storage_per_project'] === null) {
            $object->setStoragePerProject(null);
        }
        if (\array_key_exists('audit_log_forward_endpoint', $data) && $data['audit_log_forward_endpoint'] !== null) {
            $object->setAuditLogForwardEndpoint($data['audit_log_forward_endpoint']);
        }
        elseif (\array_key_exists('audit_log_forward_endpoint', $data) && $data['audit_log_forward_endpoint'] === null) {
            $object->setAuditLogForwardEndpoint(null);
        }
        if (\array_key_exists('skip_audit_log_database', $data) && $data['skip_audit_log_database'] !== null) {
            $object->setSkipAuditLogDatabase($data['skip_audit_log_database']);
        }
        elseif (\array_key_exists('skip_audit_log_database', $data) && $data['skip_audit_log_database'] === null) {
            $object->setSkipAuditLogDatabase(null);
        }
        if (\array_key_exists('session_timeout', $data) && $data['session_timeout'] !== null) {
            $object->setSessionTimeout($data['session_timeout']);
        }
        elseif (\array_key_exists('session_timeout', $data) && $data['session_timeout'] === null) {
            $object->setSessionTimeout(null);
        }
        if (\array_key_exists('scanner_skip_update_pulltime', $data) && $data['scanner_skip_update_pulltime'] !== null) {
            $object->setScannerSkipUpdatePulltime($data['scanner_skip_update_pulltime']);
        }
        elseif (\array_key_exists('scanner_skip_update_pulltime', $data) && $data['scanner_skip_update_pulltime'] === null) {
            $object->setScannerSkipUpdatePulltime(null);
        }
        if (\array_key_exists('banner_message', $data) && $data['banner_message'] !== null) {
            $object->setBannerMessage($data['banner_message']);
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
            $data['auth_mode'] = $object->getAuthMode();
        }
        if (null !== $object->getPrimaryAuthMode()) {
            $data['primary_auth_mode'] = $object->getPrimaryAuthMode();
        }
        if (null !== $object->getLdapBaseDn()) {
            $data['ldap_base_dn'] = $object->getLdapBaseDn();
        }
        if (null !== $object->getLdapFilter()) {
            $data['ldap_filter'] = $object->getLdapFilter();
        }
        if (null !== $object->getLdapGroupBaseDn()) {
            $data['ldap_group_base_dn'] = $object->getLdapGroupBaseDn();
        }
        if (null !== $object->getLdapGroupAdminDn()) {
            $data['ldap_group_admin_dn'] = $object->getLdapGroupAdminDn();
        }
        if (null !== $object->getLdapGroupAttributeName()) {
            $data['ldap_group_attribute_name'] = $object->getLdapGroupAttributeName();
        }
        if (null !== $object->getLdapGroupSearchFilter()) {
            $data['ldap_group_search_filter'] = $object->getLdapGroupSearchFilter();
        }
        if (null !== $object->getLdapGroupSearchScope()) {
            $data['ldap_group_search_scope'] = $object->getLdapGroupSearchScope();
        }
        if (null !== $object->getLdapScope()) {
            $data['ldap_scope'] = $object->getLdapScope();
        }
        if (null !== $object->getLdapSearchDn()) {
            $data['ldap_search_dn'] = $object->getLdapSearchDn();
        }
        if (null !== $object->getLdapSearchPassword()) {
            $data['ldap_search_password'] = $object->getLdapSearchPassword();
        }
        if (null !== $object->getLdapTimeout()) {
            $data['ldap_timeout'] = $object->getLdapTimeout();
        }
        if (null !== $object->getLdapUid()) {
            $data['ldap_uid'] = $object->getLdapUid();
        }
        if (null !== $object->getLdapUrl()) {
            $data['ldap_url'] = $object->getLdapUrl();
        }
        if (null !== $object->getLdapVerifyCert()) {
            $data['ldap_verify_cert'] = $object->getLdapVerifyCert();
        }
        if (null !== $object->getLdapGroupMembershipAttribute()) {
            $data['ldap_group_membership_attribute'] = $object->getLdapGroupMembershipAttribute();
        }
        if (null !== $object->getProjectCreationRestriction()) {
            $data['project_creation_restriction'] = $object->getProjectCreationRestriction();
        }
        if (null !== $object->getReadOnly()) {
            $data['read_only'] = $object->getReadOnly();
        }
        if (null !== $object->getSelfRegistration()) {
            $data['self_registration'] = $object->getSelfRegistration();
        }
        if (null !== $object->getTokenExpiration()) {
            $data['token_expiration'] = $object->getTokenExpiration();
        }
        if (null !== $object->getUaaClientId()) {
            $data['uaa_client_id'] = $object->getUaaClientId();
        }
        if (null !== $object->getUaaClientSecret()) {
            $data['uaa_client_secret'] = $object->getUaaClientSecret();
        }
        if (null !== $object->getUaaEndpoint()) {
            $data['uaa_endpoint'] = $object->getUaaEndpoint();
        }
        if (null !== $object->getUaaVerifyCert()) {
            $data['uaa_verify_cert'] = $object->getUaaVerifyCert();
        }
        if (null !== $object->getHttpAuthproxyEndpoint()) {
            $data['http_authproxy_endpoint'] = $object->getHttpAuthproxyEndpoint();
        }
        if (null !== $object->getHttpAuthproxyTokenreviewEndpoint()) {
            $data['http_authproxy_tokenreview_endpoint'] = $object->getHttpAuthproxyTokenreviewEndpoint();
        }
        if (null !== $object->getHttpAuthproxyAdminGroups()) {
            $data['http_authproxy_admin_groups'] = $object->getHttpAuthproxyAdminGroups();
        }
        if (null !== $object->getHttpAuthproxyAdminUsernames()) {
            $data['http_authproxy_admin_usernames'] = $object->getHttpAuthproxyAdminUsernames();
        }
        if (null !== $object->getHttpAuthproxyVerifyCert()) {
            $data['http_authproxy_verify_cert'] = $object->getHttpAuthproxyVerifyCert();
        }
        if (null !== $object->getHttpAuthproxySkipSearch()) {
            $data['http_authproxy_skip_search'] = $object->getHttpAuthproxySkipSearch();
        }
        if (null !== $object->getHttpAuthproxyServerCertificate()) {
            $data['http_authproxy_server_certificate'] = $object->getHttpAuthproxyServerCertificate();
        }
        if (null !== $object->getOidcName()) {
            $data['oidc_name'] = $object->getOidcName();
        }
        if (null !== $object->getOidcEndpoint()) {
            $data['oidc_endpoint'] = $object->getOidcEndpoint();
        }
        if (null !== $object->getOidcClientId()) {
            $data['oidc_client_id'] = $object->getOidcClientId();
        }
        if (null !== $object->getOidcClientSecret()) {
            $data['oidc_client_secret'] = $object->getOidcClientSecret();
        }
        if (null !== $object->getOidcGroupsClaim()) {
            $data['oidc_groups_claim'] = $object->getOidcGroupsClaim();
        }
        if (null !== $object->getOidcAdminGroup()) {
            $data['oidc_admin_group'] = $object->getOidcAdminGroup();
        }
        if (null !== $object->getOidcGroupFilter()) {
            $data['oidc_group_filter'] = $object->getOidcGroupFilter();
        }
        if (null !== $object->getOidcScope()) {
            $data['oidc_scope'] = $object->getOidcScope();
        }
        if (null !== $object->getOidcUserClaim()) {
            $data['oidc_user_claim'] = $object->getOidcUserClaim();
        }
        if (null !== $object->getOidcVerifyCert()) {
            $data['oidc_verify_cert'] = $object->getOidcVerifyCert();
        }
        if (null !== $object->getOidcAutoOnboard()) {
            $data['oidc_auto_onboard'] = $object->getOidcAutoOnboard();
        }
        if (null !== $object->getOidcExtraRedirectParms()) {
            $data['oidc_extra_redirect_parms'] = $object->getOidcExtraRedirectParms();
        }
        if (null !== $object->getRobotTokenDuration()) {
            $data['robot_token_duration'] = $object->getRobotTokenDuration();
        }
        if (null !== $object->getRobotNamePrefix()) {
            $data['robot_name_prefix'] = $object->getRobotNamePrefix();
        }
        if (null !== $object->getNotificationEnable()) {
            $data['notification_enable'] = $object->getNotificationEnable();
        }
        if (null !== $object->getQuotaPerProjectEnable()) {
            $data['quota_per_project_enable'] = $object->getQuotaPerProjectEnable();
        }
        if (null !== $object->getStoragePerProject()) {
            $data['storage_per_project'] = $object->getStoragePerProject();
        }
        if (null !== $object->getAuditLogForwardEndpoint()) {
            $data['audit_log_forward_endpoint'] = $object->getAuditLogForwardEndpoint();
        }
        if (null !== $object->getSkipAuditLogDatabase()) {
            $data['skip_audit_log_database'] = $object->getSkipAuditLogDatabase();
        }
        if (null !== $object->getSessionTimeout()) {
            $data['session_timeout'] = $object->getSessionTimeout();
        }
        if (null !== $object->getScannerSkipUpdatePulltime()) {
            $data['scanner_skip_update_pulltime'] = $object->getScannerSkipUpdatePulltime();
        }
        if (null !== $object->getBannerMessage()) {
            $data['banner_message'] = $object->getBannerMessage();
        }
        return $data;
    }
}