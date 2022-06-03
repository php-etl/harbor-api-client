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
class RetentionExecutionTaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RetentionExecutionTask';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RetentionExecutionTask';
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
        $object = new \Gyroscops\Harbor\Api\Model\RetentionExecutionTask();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('retained', $data)) {
            $object->setRetained($data['retained']);
        }
        if (\array_key_exists('job_id', $data)) {
            $object->setJobId($data['job_id']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($data['repository']);
        }
        if (\array_key_exists('status_code', $data)) {
            $object->setStatusCode($data['status_code']);
        }
        if (\array_key_exists('start_time', $data)) {
            $object->setStartTime($data['start_time']);
        }
        if (\array_key_exists('status_revision', $data)) {
            $object->setStatusRevision($data['status_revision']);
        }
        if (\array_key_exists('end_time', $data)) {
            $object->setEndTime($data['end_time']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('execution_id', $data)) {
            $object->setExecutionId($data['execution_id']);
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
        if (null !== $object->getRetained()) {
            $data['retained'] = $object->getRetained();
        }
        if (null !== $object->getJobId()) {
            $data['job_id'] = $object->getJobId();
        }
        if (null !== $object->getRepository()) {
            $data['repository'] = $object->getRepository();
        }
        if (null !== $object->getStatusCode()) {
            $data['status_code'] = $object->getStatusCode();
        }
        if (null !== $object->getStartTime()) {
            $data['start_time'] = $object->getStartTime();
        }
        if (null !== $object->getStatusRevision()) {
            $data['status_revision'] = $object->getStatusRevision();
        }
        if (null !== $object->getEndTime()) {
            $data['end_time'] = $object->getEndTime();
        }
        if (null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getExecutionId()) {
            $data['execution_id'] = $object->getExecutionId();
        }
        return $data;
    }
}