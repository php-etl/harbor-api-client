<?php

namespace Harbor\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Harbor\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GCResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\GCResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\GCResult';
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
        $object = new \Harbor\Api\Model\GCResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('job_status', $data)) {
            $object->setJobStatus($data['job_status']);
        }
        if (\array_key_exists('update_time', $data)) {
            $object->setUpdateTime($data['update_time']);
        }
        if (\array_key_exists('job_parameters', $data)) {
            $object->setJobParameters($data['job_parameters']);
        }
        if (\array_key_exists('schedule', $data)) {
            $object->setSchedule($this->denormalizer->denormalize($data['schedule'], 'Harbor\\Api\\Model\\AdminJobScheduleObj', 'json', $context));
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('job_kind', $data)) {
            $object->setJobKind($data['job_kind']);
        }
        if (\array_key_exists('creation_time', $data)) {
            $object->setCreationTime($data['creation_time']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('job_name', $data)) {
            $object->setJobName($data['job_name']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getJobStatus()) {
            $data['job_status'] = $object->getJobStatus();
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime();
        }
        if (null !== $object->getJobParameters()) {
            $data['job_parameters'] = $object->getJobParameters();
        }
        if (null !== $object->getSchedule()) {
            $data['schedule'] = $this->normalizer->normalize($object->getSchedule(), 'json', $context);
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getJobKind()) {
            $data['job_kind'] = $object->getJobKind();
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getJobName()) {
            $data['job_name'] = $object->getJobName();
        }
        return $data;
    }
}