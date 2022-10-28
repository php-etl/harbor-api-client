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

class ProjectMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata';
    }
    public function supportsNormalization($data, $format = null)
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
        if (\array_key_exists('enable_content_trust', $data) && $data['enable_content_trust'] !== null) {
            $object->setEnableContentTrust($data['enable_content_trust']);
        } elseif (\array_key_exists('enable_content_trust', $data) && $data['enable_content_trust'] === null) {
            $object->setEnableContentTrust(null);
        }
        if (\array_key_exists('auto_scan', $data) && $data['auto_scan'] !== null) {
            $object->setAutoScan($data['auto_scan']);
        } elseif (\array_key_exists('auto_scan', $data) && $data['auto_scan'] === null) {
            $object->setAutoScan(null);
        }
        if (\array_key_exists('severity', $data) && $data['severity'] !== null) {
            $object->setSeverity($data['severity']);
        } elseif (\array_key_exists('severity', $data) && $data['severity'] === null) {
            $object->setSeverity(null);
        }
        if (\array_key_exists('reuse_sys_cve_whitelist', $data) && $data['reuse_sys_cve_whitelist'] !== null) {
            $object->setReuseSysCveWhitelist($data['reuse_sys_cve_whitelist']);
        } elseif (\array_key_exists('reuse_sys_cve_whitelist', $data) && $data['reuse_sys_cve_whitelist'] === null) {
            $object->setReuseSysCveWhitelist(null);
        }
        if (\array_key_exists('public', $data) && $data['public'] !== null) {
            $object->setPublic($data['public']);
        } elseif (\array_key_exists('public', $data) && $data['public'] === null) {
            $object->setPublic(null);
        }
        if (\array_key_exists('prevent_vul', $data) && $data['prevent_vul'] !== null) {
            $object->setPreventVul($data['prevent_vul']);
        } elseif (\array_key_exists('prevent_vul', $data) && $data['prevent_vul'] === null) {
            $object->setPreventVul(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEnableContentTrust()) {
            $data['enable_content_trust'] = $object->getEnableContentTrust();
        }
        if (null !== $object->getAutoScan()) {
            $data['auto_scan'] = $object->getAutoScan();
        }
        if (null !== $object->getSeverity()) {
            $data['severity'] = $object->getSeverity();
        }
        if (null !== $object->getReuseSysCveWhitelist()) {
            $data['reuse_sys_cve_whitelist'] = $object->getReuseSysCveWhitelist();
        }
        if (null !== $object->getPublic()) {
            $data['public'] = $object->getPublic();
        }
        if (null !== $object->getPreventVul()) {
            $data['prevent_vul'] = $object->getPreventVul();
        }
        return $data;
    }
}
