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
class ExecutionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Execution';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Execution';
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
        $object = new \Gyroscops\Harbor\Api\Model\Execution();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('vendor_type', $data) && $data['vendor_type'] !== null) {
            $object->setVendorType($data['vendor_type']);
        }
        elseif (\array_key_exists('vendor_type', $data) && $data['vendor_type'] === null) {
            $object->setVendorType(null);
        }
        if (\array_key_exists('vendor_id', $data) && $data['vendor_id'] !== null) {
            $object->setVendorId($data['vendor_id']);
        }
        elseif (\array_key_exists('vendor_id', $data) && $data['vendor_id'] === null) {
            $object->setVendorId(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('status_message', $data) && $data['status_message'] !== null) {
            $object->setStatusMessage($data['status_message']);
        }
        elseif (\array_key_exists('status_message', $data) && $data['status_message'] === null) {
            $object->setStatusMessage(null);
        }
        if (\array_key_exists('metrics', $data) && $data['metrics'] !== null) {
            $object->setMetrics($this->denormalizer->denormalize($data['metrics'], 'Gyroscops\\Harbor\\Api\\Model\\Metrics', 'json', $context));
        }
        elseif (\array_key_exists('metrics', $data) && $data['metrics'] === null) {
            $object->setMetrics(null);
        }
        if (\array_key_exists('trigger', $data) && $data['trigger'] !== null) {
            $object->setTrigger($data['trigger']);
        }
        elseif (\array_key_exists('trigger', $data) && $data['trigger'] === null) {
            $object->setTrigger(null);
        }
        if (\array_key_exists('extra_attrs', $data) && $data['extra_attrs'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['extra_attrs'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setExtraAttrs($values);
        }
        elseif (\array_key_exists('extra_attrs', $data) && $data['extra_attrs'] === null) {
            $object->setExtraAttrs(null);
        }
        if (\array_key_exists('start_time', $data) && $data['start_time'] !== null) {
            $object->setStartTime($data['start_time']);
        }
        elseif (\array_key_exists('start_time', $data) && $data['start_time'] === null) {
            $object->setStartTime(null);
        }
        if (\array_key_exists('end_time', $data) && $data['end_time'] !== null) {
            $object->setEndTime($data['end_time']);
        }
        elseif (\array_key_exists('end_time', $data) && $data['end_time'] === null) {
            $object->setEndTime(null);
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
        if (null !== $object->getVendorType()) {
            $data['vendor_type'] = $object->getVendorType();
        }
        if (null !== $object->getVendorId()) {
            $data['vendor_id'] = $object->getVendorId();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getStatusMessage()) {
            $data['status_message'] = $object->getStatusMessage();
        }
        if (null !== $object->getMetrics()) {
            $data['metrics'] = $this->normalizer->normalize($object->getMetrics(), 'json', $context);
        }
        if (null !== $object->getTrigger()) {
            $data['trigger'] = $object->getTrigger();
        }
        if (null !== $object->getExtraAttrs()) {
            $values = array();
            foreach ($object->getExtraAttrs() as $key => $value) {
                $values[$key] = $value;
            }
            $data['extra_attrs'] = $values;
        }
        if (null !== $object->getStartTime()) {
            $data['start_time'] = $object->getStartTime();
        }
        if (null !== $object->getEndTime()) {
            $data['end_time'] = $object->getEndTime();
        }
        return $data;
    }
}