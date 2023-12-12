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
class WorkerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Worker';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Worker';
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
        $object = new \Gyroscops\Harbor\Api\Model\Worker();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('pool_id', $data) && $data['pool_id'] !== null) {
            $object->setPoolId($data['pool_id']);
        }
        elseif (\array_key_exists('pool_id', $data) && $data['pool_id'] === null) {
            $object->setPoolId(null);
        }
        if (\array_key_exists('job_name', $data) && $data['job_name'] !== null) {
            $object->setJobName($data['job_name']);
        }
        elseif (\array_key_exists('job_name', $data) && $data['job_name'] === null) {
            $object->setJobName(null);
        }
        if (\array_key_exists('job_id', $data) && $data['job_id'] !== null) {
            $object->setJobId($data['job_id']);
        }
        elseif (\array_key_exists('job_id', $data) && $data['job_id'] === null) {
            $object->setJobId(null);
        }
        if (\array_key_exists('start_at', $data) && $data['start_at'] !== null) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['start_at']));
        }
        elseif (\array_key_exists('start_at', $data) && $data['start_at'] === null) {
            $object->setStartAt(null);
        }
        if (\array_key_exists('check_in', $data) && $data['check_in'] !== null) {
            $object->setCheckIn($data['check_in']);
        }
        elseif (\array_key_exists('check_in', $data) && $data['check_in'] === null) {
            $object->setCheckIn(null);
        }
        if (\array_key_exists('checkin_at', $data) && $data['checkin_at'] !== null) {
            $object->setCheckinAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['checkin_at']));
        }
        elseif (\array_key_exists('checkin_at', $data) && $data['checkin_at'] === null) {
            $object->setCheckinAt(null);
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
        if (null !== $object->getPoolId()) {
            $data['pool_id'] = $object->getPoolId();
        }
        if (null !== $object->getJobName()) {
            $data['job_name'] = $object->getJobName();
        }
        if (null !== $object->getJobId()) {
            $data['job_id'] = $object->getJobId();
        }
        if (null !== $object->getStartAt()) {
            $data['start_at'] = $object->getStartAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getCheckIn()) {
            $data['check_in'] = $object->getCheckIn();
        }
        if (null !== $object->getCheckinAt()) {
            $data['checkin_at'] = $object->getCheckinAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}