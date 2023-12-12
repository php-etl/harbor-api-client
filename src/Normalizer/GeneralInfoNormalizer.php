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
class GeneralInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\GeneralInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\GeneralInfo';
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
        $object = new \Gyroscops\Harbor\Api\Model\GeneralInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('banner_message', $data) && $data['banner_message'] !== null) {
            $object->setBannerMessage($data['banner_message']);
        }
        elseif (\array_key_exists('banner_message', $data) && $data['banner_message'] === null) {
            $object->setBannerMessage(null);
        }
        if (\array_key_exists('current_time', $data) && $data['current_time'] !== null) {
            $object->setCurrentTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['current_time']));
        }
        elseif (\array_key_exists('current_time', $data) && $data['current_time'] === null) {
            $object->setCurrentTime(null);
        }
        if (\array_key_exists('registry_url', $data) && $data['registry_url'] !== null) {
            $object->setRegistryUrl($data['registry_url']);
        }
        elseif (\array_key_exists('registry_url', $data) && $data['registry_url'] === null) {
            $object->setRegistryUrl(null);
        }
        if (\array_key_exists('external_url', $data) && $data['external_url'] !== null) {
            $object->setExternalUrl($data['external_url']);
        }
        elseif (\array_key_exists('external_url', $data) && $data['external_url'] === null) {
            $object->setExternalUrl(null);
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
        if (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] !== null) {
            $object->setProjectCreationRestriction($data['project_creation_restriction']);
        }
        elseif (\array_key_exists('project_creation_restriction', $data) && $data['project_creation_restriction'] === null) {
            $object->setProjectCreationRestriction(null);
        }
        if (\array_key_exists('self_registration', $data) && $data['self_registration'] !== null) {
            $object->setSelfRegistration($data['self_registration']);
        }
        elseif (\array_key_exists('self_registration', $data) && $data['self_registration'] === null) {
            $object->setSelfRegistration(null);
        }
        if (\array_key_exists('has_ca_root', $data) && $data['has_ca_root'] !== null) {
            $object->setHasCaRoot($data['has_ca_root']);
        }
        elseif (\array_key_exists('has_ca_root', $data) && $data['has_ca_root'] === null) {
            $object->setHasCaRoot(null);
        }
        if (\array_key_exists('harbor_version', $data) && $data['harbor_version'] !== null) {
            $object->setHarborVersion($data['harbor_version']);
        }
        elseif (\array_key_exists('harbor_version', $data) && $data['harbor_version'] === null) {
            $object->setHarborVersion(null);
        }
        if (\array_key_exists('registry_storage_provider_name', $data) && $data['registry_storage_provider_name'] !== null) {
            $object->setRegistryStorageProviderName($data['registry_storage_provider_name']);
        }
        elseif (\array_key_exists('registry_storage_provider_name', $data) && $data['registry_storage_provider_name'] === null) {
            $object->setRegistryStorageProviderName(null);
        }
        if (\array_key_exists('read_only', $data) && $data['read_only'] !== null) {
            $object->setReadOnly($data['read_only']);
        }
        elseif (\array_key_exists('read_only', $data) && $data['read_only'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('notification_enable', $data) && $data['notification_enable'] !== null) {
            $object->setNotificationEnable($data['notification_enable']);
        }
        elseif (\array_key_exists('notification_enable', $data) && $data['notification_enable'] === null) {
            $object->setNotificationEnable(null);
        }
        if (\array_key_exists('authproxy_settings', $data) && $data['authproxy_settings'] !== null) {
            $object->setAuthproxySettings($this->denormalizer->denormalize($data['authproxy_settings'], 'Gyroscops\\Harbor\\Api\\Model\\AuthproxySetting', 'json', $context));
        }
        elseif (\array_key_exists('authproxy_settings', $data) && $data['authproxy_settings'] === null) {
            $object->setAuthproxySettings(null);
        }
        if (\array_key_exists('oidc_provider_name', $data) && $data['oidc_provider_name'] !== null) {
            $object->setOidcProviderName($data['oidc_provider_name']);
        }
        elseif (\array_key_exists('oidc_provider_name', $data) && $data['oidc_provider_name'] === null) {
            $object->setOidcProviderName(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBannerMessage()) {
            $data['banner_message'] = $object->getBannerMessage();
        }
        if (null !== $object->getCurrentTime()) {
            $data['current_time'] = $object->getCurrentTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getRegistryUrl()) {
            $data['registry_url'] = $object->getRegistryUrl();
        }
        if (null !== $object->getExternalUrl()) {
            $data['external_url'] = $object->getExternalUrl();
        }
        if (null !== $object->getAuthMode()) {
            $data['auth_mode'] = $object->getAuthMode();
        }
        if (null !== $object->getPrimaryAuthMode()) {
            $data['primary_auth_mode'] = $object->getPrimaryAuthMode();
        }
        if (null !== $object->getProjectCreationRestriction()) {
            $data['project_creation_restriction'] = $object->getProjectCreationRestriction();
        }
        if (null !== $object->getSelfRegistration()) {
            $data['self_registration'] = $object->getSelfRegistration();
        }
        if (null !== $object->getHasCaRoot()) {
            $data['has_ca_root'] = $object->getHasCaRoot();
        }
        if (null !== $object->getHarborVersion()) {
            $data['harbor_version'] = $object->getHarborVersion();
        }
        if (null !== $object->getRegistryStorageProviderName()) {
            $data['registry_storage_provider_name'] = $object->getRegistryStorageProviderName();
        }
        if (null !== $object->getReadOnly()) {
            $data['read_only'] = $object->getReadOnly();
        }
        if (null !== $object->getNotificationEnable()) {
            $data['notification_enable'] = $object->getNotificationEnable();
        }
        if (null !== $object->getAuthproxySettings()) {
            $data['authproxy_settings'] = $this->normalizer->normalize($object->getAuthproxySettings(), 'json', $context);
        }
        if (null !== $object->getOidcProviderName()) {
            $data['oidc_provider_name'] = $object->getOidcProviderName();
        }
        return $data;
    }
}