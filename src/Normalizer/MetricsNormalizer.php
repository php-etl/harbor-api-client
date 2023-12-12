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
class MetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Metrics';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Metrics';
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
        $object = new \Gyroscops\Harbor\Api\Model\Metrics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('task_count', $data) && $data['task_count'] !== null) {
            $object->setTaskCount($data['task_count']);
        }
        elseif (\array_key_exists('task_count', $data) && $data['task_count'] === null) {
            $object->setTaskCount(null);
        }
        if (\array_key_exists('success_task_count', $data) && $data['success_task_count'] !== null) {
            $object->setSuccessTaskCount($data['success_task_count']);
        }
        elseif (\array_key_exists('success_task_count', $data) && $data['success_task_count'] === null) {
            $object->setSuccessTaskCount(null);
        }
        if (\array_key_exists('error_task_count', $data) && $data['error_task_count'] !== null) {
            $object->setErrorTaskCount($data['error_task_count']);
        }
        elseif (\array_key_exists('error_task_count', $data) && $data['error_task_count'] === null) {
            $object->setErrorTaskCount(null);
        }
        if (\array_key_exists('pending_task_count', $data) && $data['pending_task_count'] !== null) {
            $object->setPendingTaskCount($data['pending_task_count']);
        }
        elseif (\array_key_exists('pending_task_count', $data) && $data['pending_task_count'] === null) {
            $object->setPendingTaskCount(null);
        }
        if (\array_key_exists('running_task_count', $data) && $data['running_task_count'] !== null) {
            $object->setRunningTaskCount($data['running_task_count']);
        }
        elseif (\array_key_exists('running_task_count', $data) && $data['running_task_count'] === null) {
            $object->setRunningTaskCount(null);
        }
        if (\array_key_exists('scheduled_task_count', $data) && $data['scheduled_task_count'] !== null) {
            $object->setScheduledTaskCount($data['scheduled_task_count']);
        }
        elseif (\array_key_exists('scheduled_task_count', $data) && $data['scheduled_task_count'] === null) {
            $object->setScheduledTaskCount(null);
        }
        if (\array_key_exists('stopped_task_count', $data) && $data['stopped_task_count'] !== null) {
            $object->setStoppedTaskCount($data['stopped_task_count']);
        }
        elseif (\array_key_exists('stopped_task_count', $data) && $data['stopped_task_count'] === null) {
            $object->setStoppedTaskCount(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTaskCount()) {
            $data['task_count'] = $object->getTaskCount();
        }
        if (null !== $object->getSuccessTaskCount()) {
            $data['success_task_count'] = $object->getSuccessTaskCount();
        }
        if (null !== $object->getErrorTaskCount()) {
            $data['error_task_count'] = $object->getErrorTaskCount();
        }
        if (null !== $object->getPendingTaskCount()) {
            $data['pending_task_count'] = $object->getPendingTaskCount();
        }
        if (null !== $object->getRunningTaskCount()) {
            $data['running_task_count'] = $object->getRunningTaskCount();
        }
        if (null !== $object->getScheduledTaskCount()) {
            $data['scheduled_task_count'] = $object->getScheduledTaskCount();
        }
        if (null !== $object->getStoppedTaskCount()) {
            $data['stopped_task_count'] = $object->getStoppedTaskCount();
        }
        return $data;
    }
}