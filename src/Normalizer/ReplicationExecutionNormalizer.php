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

class ReplicationExecutionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ReplicationExecution';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ReplicationExecution';
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
        $object = new \Gyroscops\Harbor\Api\Model\ReplicationExecution();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('status_text', $data) && $data['status_text'] !== null) {
            $object->setStatusText($data['status_text']);
        } elseif (\array_key_exists('status_text', $data) && $data['status_text'] === null) {
            $object->setStatusText(null);
        }
        if (\array_key_exists('trigger', $data) && $data['trigger'] !== null) {
            $object->setTrigger($data['trigger']);
        } elseif (\array_key_exists('trigger', $data) && $data['trigger'] === null) {
            $object->setTrigger(null);
        }
        if (\array_key_exists('start_time', $data) && $data['start_time'] !== null) {
            $object->setStartTime($data['start_time']);
        } elseif (\array_key_exists('start_time', $data) && $data['start_time'] === null) {
            $object->setStartTime(null);
        }
        if (\array_key_exists('failed', $data) && $data['failed'] !== null) {
            $object->setFailed($data['failed']);
        } elseif (\array_key_exists('failed', $data) && $data['failed'] === null) {
            $object->setFailed(null);
        }
        if (\array_key_exists('succeed', $data) && $data['succeed'] !== null) {
            $object->setSucceed($data['succeed']);
        } elseif (\array_key_exists('succeed', $data) && $data['succeed'] === null) {
            $object->setSucceed(null);
        }
        if (\array_key_exists('stopped', $data) && $data['stopped'] !== null) {
            $object->setStopped($data['stopped']);
        } elseif (\array_key_exists('stopped', $data) && $data['stopped'] === null) {
            $object->setStopped(null);
        }
        if (\array_key_exists('end_time', $data) && $data['end_time'] !== null) {
            $object->setEndTime($data['end_time']);
        } elseif (\array_key_exists('end_time', $data) && $data['end_time'] === null) {
            $object->setEndTime(null);
        }
        if (\array_key_exists('in_progress', $data) && $data['in_progress'] !== null) {
            $object->setInProgress($data['in_progress']);
        } elseif (\array_key_exists('in_progress', $data) && $data['in_progress'] === null) {
            $object->setInProgress(null);
        }
        if (\array_key_exists('total', $data) && $data['total'] !== null) {
            $object->setTotal($data['total']);
        } elseif (\array_key_exists('total', $data) && $data['total'] === null) {
            $object->setTotal(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('policy_id', $data) && $data['policy_id'] !== null) {
            $object->setPolicyId($data['policy_id']);
        } elseif (\array_key_exists('policy_id', $data) && $data['policy_id'] === null) {
            $object->setPolicyId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getStatusText()) {
            $data['status_text'] = $object->getStatusText();
        }
        if (null !== $object->getTrigger()) {
            $data['trigger'] = $object->getTrigger();
        }
        if (null !== $object->getStartTime()) {
            $data['start_time'] = $object->getStartTime();
        }
        if (null !== $object->getFailed()) {
            $data['failed'] = $object->getFailed();
        }
        if (null !== $object->getSucceed()) {
            $data['succeed'] = $object->getSucceed();
        }
        if (null !== $object->getStopped()) {
            $data['stopped'] = $object->getStopped();
        }
        if (null !== $object->getEndTime()) {
            $data['end_time'] = $object->getEndTime();
        }
        if (null !== $object->getInProgress()) {
            $data['in_progress'] = $object->getInProgress();
        }
        if (null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getPolicyId()) {
            $data['policy_id'] = $object->getPolicyId();
        }
        return $data;
    }
}
