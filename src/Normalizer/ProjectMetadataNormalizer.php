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
        if (\array_key_exists('enable_content_trust', $data)) {
            $object->setEnableContentTrust($data['enable_content_trust']);
        }
        if (\array_key_exists('auto_scan', $data)) {
            $object->setAutoScan($data['auto_scan']);
        }
        if (\array_key_exists('severity', $data)) {
            $object->setSeverity($data['severity']);
        }
        if (\array_key_exists('reuse_sys_cve_whitelist', $data)) {
            $object->setReuseSysCveWhitelist($data['reuse_sys_cve_whitelist']);
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
        }
        if (\array_key_exists('prevent_vul', $data)) {
            $object->setPreventVul($data['prevent_vul']);
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