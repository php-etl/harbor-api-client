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
class JobQueueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\JobQueue';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\JobQueue';
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
        $object = new \Gyroscops\Harbor\Api\Model\JobQueue();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('job_type', $data) && $data['job_type'] !== null) {
            $object->setJobType($data['job_type']);
        }
        elseif (\array_key_exists('job_type', $data) && $data['job_type'] === null) {
            $object->setJobType(null);
        }
        if (\array_key_exists('count', $data) && $data['count'] !== null) {
            $object->setCount($data['count']);
        }
        elseif (\array_key_exists('count', $data) && $data['count'] === null) {
            $object->setCount(null);
        }
        if (\array_key_exists('latency', $data) && $data['latency'] !== null) {
            $object->setLatency($data['latency']);
        }
        elseif (\array_key_exists('latency', $data) && $data['latency'] === null) {
            $object->setLatency(null);
        }
        if (\array_key_exists('paused', $data) && $data['paused'] !== null) {
            $object->setPaused($data['paused']);
        }
        elseif (\array_key_exists('paused', $data) && $data['paused'] === null) {
            $object->setPaused(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getJobType()) {
            $data['job_type'] = $object->getJobType();
        }
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if (null !== $object->getLatency()) {
            $data['latency'] = $object->getLatency();
        }
        if (null !== $object->getPaused()) {
            $data['paused'] = $object->getPaused();
        }
        return $data;
    }
}