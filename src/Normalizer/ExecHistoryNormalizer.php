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
class ExecHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ExecHistory';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ExecHistory';
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
        $object = new \Gyroscops\Harbor\Api\Model\ExecHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('job_name', $data) && $data['job_name'] !== null) {
            $object->setJobName($data['job_name']);
        }
        elseif (\array_key_exists('job_name', $data) && $data['job_name'] === null) {
            $object->setJobName(null);
        }
        if (\array_key_exists('job_kind', $data) && $data['job_kind'] !== null) {
            $object->setJobKind($data['job_kind']);
        }
        elseif (\array_key_exists('job_kind', $data) && $data['job_kind'] === null) {
            $object->setJobKind(null);
        }
        if (\array_key_exists('job_parameters', $data) && $data['job_parameters'] !== null) {
            $object->setJobParameters($data['job_parameters']);
        }
        elseif (\array_key_exists('job_parameters', $data) && $data['job_parameters'] === null) {
            $object->setJobParameters(null);
        }
        if (\array_key_exists('schedule', $data) && $data['schedule'] !== null) {
            $object->setSchedule($this->denormalizer->denormalize($data['schedule'], 'Gyroscops\\Harbor\\Api\\Model\\ScheduleObj', 'json', $context));
        }
        elseif (\array_key_exists('schedule', $data) && $data['schedule'] === null) {
            $object->setSchedule(null);
        }
        if (\array_key_exists('job_status', $data) && $data['job_status'] !== null) {
            $object->setJobStatus($data['job_status']);
        }
        elseif (\array_key_exists('job_status', $data) && $data['job_status'] === null) {
            $object->setJobStatus(null);
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted($data['deleted']);
        }
        elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('creation_time', $data) && $data['creation_time'] !== null) {
            $object->setCreationTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creation_time']));
        }
        elseif (\array_key_exists('creation_time', $data) && $data['creation_time'] === null) {
            $object->setCreationTime(null);
        }
        if (\array_key_exists('update_time', $data) && $data['update_time'] !== null) {
            $object->setUpdateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['update_time']));
        }
        elseif (\array_key_exists('update_time', $data) && $data['update_time'] === null) {
            $object->setUpdateTime(null);
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
        if (null !== $object->getJobName()) {
            $data['job_name'] = $object->getJobName();
        }
        if (null !== $object->getJobKind()) {
            $data['job_kind'] = $object->getJobKind();
        }
        if (null !== $object->getJobParameters()) {
            $data['job_parameters'] = $object->getJobParameters();
        }
        if (null !== $object->getSchedule()) {
            $data['schedule'] = $this->normalizer->normalize($object->getSchedule(), 'json', $context);
        }
        if (null !== $object->getJobStatus()) {
            $data['job_status'] = $object->getJobStatus();
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}