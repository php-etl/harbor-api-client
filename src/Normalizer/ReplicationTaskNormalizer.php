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
class ReplicationTaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ReplicationTask';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ReplicationTask';
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
        $object = new \Gyroscops\Harbor\Api\Model\ReplicationTask();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('execution_id', $data) && $data['execution_id'] !== null) {
            $object->setExecutionId($data['execution_id']);
        }
        elseif (\array_key_exists('execution_id', $data) && $data['execution_id'] === null) {
            $object->setExecutionId(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('job_id', $data) && $data['job_id'] !== null) {
            $object->setJobId($data['job_id']);
        }
        elseif (\array_key_exists('job_id', $data) && $data['job_id'] === null) {
            $object->setJobId(null);
        }
        if (\array_key_exists('operation', $data) && $data['operation'] !== null) {
            $object->setOperation($data['operation']);
        }
        elseif (\array_key_exists('operation', $data) && $data['operation'] === null) {
            $object->setOperation(null);
        }
        if (\array_key_exists('resource_type', $data) && $data['resource_type'] !== null) {
            $object->setResourceType($data['resource_type']);
        }
        elseif (\array_key_exists('resource_type', $data) && $data['resource_type'] === null) {
            $object->setResourceType(null);
        }
        if (\array_key_exists('src_resource', $data) && $data['src_resource'] !== null) {
            $object->setSrcResource($data['src_resource']);
        }
        elseif (\array_key_exists('src_resource', $data) && $data['src_resource'] === null) {
            $object->setSrcResource(null);
        }
        if (\array_key_exists('dst_resource', $data) && $data['dst_resource'] !== null) {
            $object->setDstResource($data['dst_resource']);
        }
        elseif (\array_key_exists('dst_resource', $data) && $data['dst_resource'] === null) {
            $object->setDstResource(null);
        }
        if (\array_key_exists('start_time', $data) && $data['start_time'] !== null) {
            $object->setStartTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['start_time']));
        }
        elseif (\array_key_exists('start_time', $data) && $data['start_time'] === null) {
            $object->setStartTime(null);
        }
        if (\array_key_exists('end_time', $data) && $data['end_time'] !== null) {
            $object->setEndTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['end_time']));
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
        if (null !== $object->getExecutionId()) {
            $data['execution_id'] = $object->getExecutionId();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getJobId()) {
            $data['job_id'] = $object->getJobId();
        }
        if (null !== $object->getOperation()) {
            $data['operation'] = $object->getOperation();
        }
        if (null !== $object->getResourceType()) {
            $data['resource_type'] = $object->getResourceType();
        }
        if (null !== $object->getSrcResource()) {
            $data['src_resource'] = $object->getSrcResource();
        }
        if (null !== $object->getDstResource()) {
            $data['dst_resource'] = $object->getDstResource();
        }
        if (null !== $object->getStartTime()) {
            $data['start_time'] = $object->getStartTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getEndTime()) {
            $data['end_time'] = $object->getEndTime()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}