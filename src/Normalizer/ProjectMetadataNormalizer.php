<?php

namespace Gyroscops\Harbor\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Gyroscops\Harbor\Api\Runtime\Normalizer\CheckArray;
use Gyroscops\Harbor\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProjectMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata';
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
        $object = new \Gyroscops\Harbor\Api\Model\ProjectMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('public', $data) && $data['public'] !== null) {
            $object->setPublic($data['public']);
        }
        elseif (\array_key_exists('public', $data) && $data['public'] === null) {
            $object->setPublic(null);
        }
        if (\array_key_exists('enable_content_trust', $data) && $data['enable_content_trust'] !== null) {
            $object->setEnableContentTrust($data['enable_content_trust']);
        }
        elseif (\array_key_exists('enable_content_trust', $data) && $data['enable_content_trust'] === null) {
            $object->setEnableContentTrust(null);
        }
        if (\array_key_exists('enable_content_trust_cosign', $data) && $data['enable_content_trust_cosign'] !== null) {
            $object->setEnableContentTrustCosign($data['enable_content_trust_cosign']);
        }
        elseif (\array_key_exists('enable_content_trust_cosign', $data) && $data['enable_content_trust_cosign'] === null) {
            $object->setEnableContentTrustCosign(null);
        }
        if (\array_key_exists('prevent_vul', $data) && $data['prevent_vul'] !== null) {
            $object->setPreventVul($data['prevent_vul']);
        }
        elseif (\array_key_exists('prevent_vul', $data) && $data['prevent_vul'] === null) {
            $object->setPreventVul(null);
        }
        if (\array_key_exists('severity', $data) && $data['severity'] !== null) {
            $object->setSeverity($data['severity']);
        }
        elseif (\array_key_exists('severity', $data) && $data['severity'] === null) {
            $object->setSeverity(null);
        }
        if (\array_key_exists('auto_scan', $data) && $data['auto_scan'] !== null) {
            $object->setAutoScan($data['auto_scan']);
        }
        elseif (\array_key_exists('auto_scan', $data) && $data['auto_scan'] === null) {
            $object->setAutoScan(null);
        }
        if (\array_key_exists('reuse_sys_cve_allowlist', $data) && $data['reuse_sys_cve_allowlist'] !== null) {
            $object->setReuseSysCveAllowlist($data['reuse_sys_cve_allowlist']);
        }
        elseif (\array_key_exists('reuse_sys_cve_allowlist', $data) && $data['reuse_sys_cve_allowlist'] === null) {
            $object->setReuseSysCveAllowlist(null);
        }
        if (\array_key_exists('retention_id', $data) && $data['retention_id'] !== null) {
            $object->setRetentionId($data['retention_id']);
        }
        elseif (\array_key_exists('retention_id', $data) && $data['retention_id'] === null) {
            $object->setRetentionId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('public') && null !== $object->getPublic()) {
            $data['public'] = $object->getPublic();
        }
        if ($object->isInitialized('enableContentTrust') && null !== $object->getEnableContentTrust()) {
            $data['enable_content_trust'] = $object->getEnableContentTrust();
        }
        if ($object->isInitialized('enableContentTrustCosign') && null !== $object->getEnableContentTrustCosign()) {
            $data['enable_content_trust_cosign'] = $object->getEnableContentTrustCosign();
        }
        if ($object->isInitialized('preventVul') && null !== $object->getPreventVul()) {
            $data['prevent_vul'] = $object->getPreventVul();
        }
        if ($object->isInitialized('severity') && null !== $object->getSeverity()) {
            $data['severity'] = $object->getSeverity();
        }
        if ($object->isInitialized('autoScan') && null !== $object->getAutoScan()) {
            $data['auto_scan'] = $object->getAutoScan();
        }
        if ($object->isInitialized('reuseSysCveAllowlist') && null !== $object->getReuseSysCveAllowlist()) {
            $data['reuse_sys_cve_allowlist'] = $object->getReuseSysCveAllowlist();
        }
        if ($object->isInitialized('retentionId') && null !== $object->getRetentionId()) {
            $data['retention_id'] = $object->getRetentionId();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata' => false);
    }
}