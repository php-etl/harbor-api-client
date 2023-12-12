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
class InstanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Instance';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Instance';
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
        $object = new \Gyroscops\Harbor\Api\Model\Instance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('vendor', $data) && $data['vendor'] !== null) {
            $object->setVendor($data['vendor']);
        }
        elseif (\array_key_exists('vendor', $data) && $data['vendor'] === null) {
            $object->setVendor(null);
        }
        if (\array_key_exists('endpoint', $data) && $data['endpoint'] !== null) {
            $object->setEndpoint($data['endpoint']);
        }
        elseif (\array_key_exists('endpoint', $data) && $data['endpoint'] === null) {
            $object->setEndpoint(null);
        }
        if (\array_key_exists('auth_mode', $data) && $data['auth_mode'] !== null) {
            $object->setAuthMode($data['auth_mode']);
        }
        elseif (\array_key_exists('auth_mode', $data) && $data['auth_mode'] === null) {
            $object->setAuthMode(null);
        }
        if (\array_key_exists('auth_info', $data) && $data['auth_info'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['auth_info'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setAuthInfo($values);
        }
        elseif (\array_key_exists('auth_info', $data) && $data['auth_info'] === null) {
            $object->setAuthInfo(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('enabled', $data) && $data['enabled'] !== null) {
            $object->setEnabled($data['enabled']);
        }
        elseif (\array_key_exists('enabled', $data) && $data['enabled'] === null) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('default', $data) && $data['default'] !== null) {
            $object->setDefault($data['default']);
        }
        elseif (\array_key_exists('default', $data) && $data['default'] === null) {
            $object->setDefault(null);
        }
        if (\array_key_exists('insecure', $data) && $data['insecure'] !== null) {
            $object->setInsecure($data['insecure']);
        }
        elseif (\array_key_exists('insecure', $data) && $data['insecure'] === null) {
            $object->setInsecure(null);
        }
        if (\array_key_exists('setup_timestamp', $data) && $data['setup_timestamp'] !== null) {
            $object->setSetupTimestamp($data['setup_timestamp']);
        }
        elseif (\array_key_exists('setup_timestamp', $data) && $data['setup_timestamp'] === null) {
            $object->setSetupTimestamp(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getVendor()) {
            $data['vendor'] = $object->getVendor();
        }
        if (null !== $object->getEndpoint()) {
            $data['endpoint'] = $object->getEndpoint();
        }
        if (null !== $object->getAuthMode()) {
            $data['auth_mode'] = $object->getAuthMode();
        }
        if (null !== $object->getAuthInfo()) {
            $values = array();
            foreach ($object->getAuthInfo() as $key => $value) {
                $values[$key] = $value;
            }
            $data['auth_info'] = $values;
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getDefault()) {
            $data['default'] = $object->getDefault();
        }
        if (null !== $object->getInsecure()) {
            $data['insecure'] = $object->getInsecure();
        }
        if (null !== $object->getSetupTimestamp()) {
            $data['setup_timestamp'] = $object->getSetupTimestamp();
        }
        return $data;
    }
}