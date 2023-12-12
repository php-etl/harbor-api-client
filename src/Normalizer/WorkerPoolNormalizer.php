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
class WorkerPoolNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\WorkerPool';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\WorkerPool';
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
        $object = new \Gyroscops\Harbor\Api\Model\WorkerPool();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pid', $data) && $data['pid'] !== null) {
            $object->setPid($data['pid']);
        }
        elseif (\array_key_exists('pid', $data) && $data['pid'] === null) {
            $object->setPid(null);
        }
        if (\array_key_exists('worker_pool_id', $data) && $data['worker_pool_id'] !== null) {
            $object->setWorkerPoolId($data['worker_pool_id']);
        }
        elseif (\array_key_exists('worker_pool_id', $data) && $data['worker_pool_id'] === null) {
            $object->setWorkerPoolId(null);
        }
        if (\array_key_exists('start_at', $data) && $data['start_at'] !== null) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['start_at']));
        }
        elseif (\array_key_exists('start_at', $data) && $data['start_at'] === null) {
            $object->setStartAt(null);
        }
        if (\array_key_exists('heartbeat_at', $data) && $data['heartbeat_at'] !== null) {
            $object->setHeartbeatAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['heartbeat_at']));
        }
        elseif (\array_key_exists('heartbeat_at', $data) && $data['heartbeat_at'] === null) {
            $object->setHeartbeatAt(null);
        }
        if (\array_key_exists('concurrency', $data) && $data['concurrency'] !== null) {
            $object->setConcurrency($data['concurrency']);
        }
        elseif (\array_key_exists('concurrency', $data) && $data['concurrency'] === null) {
            $object->setConcurrency(null);
        }
        if (\array_key_exists('host', $data) && $data['host'] !== null) {
            $object->setHost($data['host']);
        }
        elseif (\array_key_exists('host', $data) && $data['host'] === null) {
            $object->setHost(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPid()) {
            $data['pid'] = $object->getPid();
        }
        if (null !== $object->getWorkerPoolId()) {
            $data['worker_pool_id'] = $object->getWorkerPoolId();
        }
        if (null !== $object->getStartAt()) {
            $data['start_at'] = $object->getStartAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getHeartbeatAt()) {
            $data['heartbeat_at'] = $object->getHeartbeatAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getConcurrency()) {
            $data['concurrency'] = $object->getConcurrency();
        }
        if (null !== $object->getHost()) {
            $data['host'] = $object->getHost();
        }
        return $data;
    }
}