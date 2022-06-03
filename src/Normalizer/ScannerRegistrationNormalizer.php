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
class ScannerRegistrationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ScannerRegistration';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ScannerRegistration';
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
        $object = new \Gyroscops\Harbor\Api\Model\ScannerRegistration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
        }
        if (\array_key_exists('vendor', $data)) {
            $object->setVendor($data['vendor']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('adapter', $data)) {
            $object->setAdapter($data['adapter']);
        }
        if (\array_key_exists('access_credential', $data)) {
            $object->setAccessCredential($data['access_credential']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
        }
        if (\array_key_exists('auth', $data)) {
            $object->setAuth($data['auth']);
        }
        if (\array_key_exists('is_default', $data)) {
            $object->setIsDefault($data['is_default']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('health', $data)) {
            $object->setHealth($data['health']);
        }
        if (\array_key_exists('use_internal_addr', $data)) {
            $object->setUseInternalAddr($data['use_internal_addr']);
        }
        if (\array_key_exists('skip_certVerify', $data)) {
            $object->setSkipCertVerify($data['skip_certVerify']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        if (null !== $object->getVendor()) {
            $data['vendor'] = $object->getVendor();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getAdapter()) {
            $data['adapter'] = $object->getAdapter();
        }
        if (null !== $object->getAccessCredential()) {
            $data['access_credential'] = $object->getAccessCredential();
        }
        if (null !== $object->getUuid()) {
            $data['uuid'] = $object->getUuid();
        }
        if (null !== $object->getAuth()) {
            $data['auth'] = $object->getAuth();
        }
        if (null !== $object->getIsDefault()) {
            $data['is_default'] = $object->getIsDefault();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        if (null !== $object->getHealth()) {
            $data['health'] = $object->getHealth();
        }
        if (null !== $object->getUseInternalAddr()) {
            $data['use_internal_addr'] = $object->getUseInternalAddr();
        }
        if (null !== $object->getSkipCertVerify()) {
            $data['skip_certVerify'] = $object->getSkipCertVerify();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        return $data;
    }
}