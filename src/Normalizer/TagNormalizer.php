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
class TagNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Tag';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Tag';
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
        $object = new \Gyroscops\Harbor\Api\Model\Tag();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('repository_id', $data) && $data['repository_id'] !== null) {
            $object->setRepositoryId($data['repository_id']);
        }
        elseif (\array_key_exists('repository_id', $data) && $data['repository_id'] === null) {
            $object->setRepositoryId(null);
        }
        if (\array_key_exists('artifact_id', $data) && $data['artifact_id'] !== null) {
            $object->setArtifactId($data['artifact_id']);
        }
        elseif (\array_key_exists('artifact_id', $data) && $data['artifact_id'] === null) {
            $object->setArtifactId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('push_time', $data) && $data['push_time'] !== null) {
            $object->setPushTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['push_time']));
        }
        elseif (\array_key_exists('push_time', $data) && $data['push_time'] === null) {
            $object->setPushTime(null);
        }
        if (\array_key_exists('pull_time', $data) && $data['pull_time'] !== null) {
            $object->setPullTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['pull_time']));
        }
        elseif (\array_key_exists('pull_time', $data) && $data['pull_time'] === null) {
            $object->setPullTime(null);
        }
        if (\array_key_exists('immutable', $data) && $data['immutable'] !== null) {
            $object->setImmutable($data['immutable']);
        }
        elseif (\array_key_exists('immutable', $data) && $data['immutable'] === null) {
            $object->setImmutable(null);
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
        if (null !== $object->getRepositoryId()) {
            $data['repository_id'] = $object->getRepositoryId();
        }
        if (null !== $object->getArtifactId()) {
            $data['artifact_id'] = $object->getArtifactId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPushTime()) {
            $data['push_time'] = $object->getPushTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getPullTime()) {
            $data['pull_time'] = $object->getPullTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getImmutable()) {
            $data['immutable'] = $object->getImmutable();
        }
        return $data;
    }
}