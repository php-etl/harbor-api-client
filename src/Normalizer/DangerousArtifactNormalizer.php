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
class DangerousArtifactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\DangerousArtifact';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\DangerousArtifact';
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
        $object = new \Gyroscops\Harbor\Api\Model\DangerousArtifact();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        }
        elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('repository_name', $data) && $data['repository_name'] !== null) {
            $object->setRepositoryName($data['repository_name']);
        }
        elseif (\array_key_exists('repository_name', $data) && $data['repository_name'] === null) {
            $object->setRepositoryName(null);
        }
        if (\array_key_exists('digest', $data) && $data['digest'] !== null) {
            $object->setDigest($data['digest']);
        }
        elseif (\array_key_exists('digest', $data) && $data['digest'] === null) {
            $object->setDigest(null);
        }
        if (\array_key_exists('critical_cnt', $data) && $data['critical_cnt'] !== null) {
            $object->setCriticalCnt($data['critical_cnt']);
        }
        elseif (\array_key_exists('critical_cnt', $data) && $data['critical_cnt'] === null) {
            $object->setCriticalCnt(null);
        }
        if (\array_key_exists('high_cnt', $data) && $data['high_cnt'] !== null) {
            $object->setHighCnt($data['high_cnt']);
        }
        elseif (\array_key_exists('high_cnt', $data) && $data['high_cnt'] === null) {
            $object->setHighCnt(null);
        }
        if (\array_key_exists('medium_cnt', $data) && $data['medium_cnt'] !== null) {
            $object->setMediumCnt($data['medium_cnt']);
        }
        elseif (\array_key_exists('medium_cnt', $data) && $data['medium_cnt'] === null) {
            $object->setMediumCnt(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getRepositoryName()) {
            $data['repository_name'] = $object->getRepositoryName();
        }
        if (null !== $object->getDigest()) {
            $data['digest'] = $object->getDigest();
        }
        if (null !== $object->getCriticalCnt()) {
            $data['critical_cnt'] = $object->getCriticalCnt();
        }
        if (null !== $object->getHighCnt()) {
            $data['high_cnt'] = $object->getHighCnt();
        }
        if (null !== $object->getMediumCnt()) {
            $data['medium_cnt'] = $object->getMediumCnt();
        }
        return $data;
    }
}