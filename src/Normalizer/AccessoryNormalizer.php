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
class AccessoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Accessory';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Accessory';
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
        $object = new \Gyroscops\Harbor\Api\Model\Accessory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('artifact_id', $data) && $data['artifact_id'] !== null) {
            $object->setArtifactId($data['artifact_id']);
        }
        elseif (\array_key_exists('artifact_id', $data) && $data['artifact_id'] === null) {
            $object->setArtifactId(null);
        }
        if (\array_key_exists('subject_artifact_id', $data) && $data['subject_artifact_id'] !== null) {
            $object->setSubjectArtifactId($data['subject_artifact_id']);
        }
        elseif (\array_key_exists('subject_artifact_id', $data) && $data['subject_artifact_id'] === null) {
            $object->setSubjectArtifactId(null);
        }
        if (\array_key_exists('subject_artifact_digest', $data) && $data['subject_artifact_digest'] !== null) {
            $object->setSubjectArtifactDigest($data['subject_artifact_digest']);
        }
        elseif (\array_key_exists('subject_artifact_digest', $data) && $data['subject_artifact_digest'] === null) {
            $object->setSubjectArtifactDigest(null);
        }
        if (\array_key_exists('subject_artifact_repo', $data) && $data['subject_artifact_repo'] !== null) {
            $object->setSubjectArtifactRepo($data['subject_artifact_repo']);
        }
        elseif (\array_key_exists('subject_artifact_repo', $data) && $data['subject_artifact_repo'] === null) {
            $object->setSubjectArtifactRepo(null);
        }
        if (\array_key_exists('size', $data) && $data['size'] !== null) {
            $object->setSize($data['size']);
        }
        elseif (\array_key_exists('size', $data) && $data['size'] === null) {
            $object->setSize(null);
        }
        if (\array_key_exists('digest', $data) && $data['digest'] !== null) {
            $object->setDigest($data['digest']);
        }
        elseif (\array_key_exists('digest', $data) && $data['digest'] === null) {
            $object->setDigest(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('icon', $data) && $data['icon'] !== null) {
            $object->setIcon($data['icon']);
        }
        elseif (\array_key_exists('icon', $data) && $data['icon'] === null) {
            $object->setIcon(null);
        }
        if (\array_key_exists('creation_time', $data) && $data['creation_time'] !== null) {
            $object->setCreationTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creation_time']));
        }
        elseif (\array_key_exists('creation_time', $data) && $data['creation_time'] === null) {
            $object->setCreationTime(null);
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
        if (null !== $object->getArtifactId()) {
            $data['artifact_id'] = $object->getArtifactId();
        }
        if (null !== $object->getSubjectArtifactId()) {
            $data['subject_artifact_id'] = $object->getSubjectArtifactId();
        }
        if (null !== $object->getSubjectArtifactDigest()) {
            $data['subject_artifact_digest'] = $object->getSubjectArtifactDigest();
        }
        if (null !== $object->getSubjectArtifactRepo()) {
            $data['subject_artifact_repo'] = $object->getSubjectArtifactRepo();
        }
        if (null !== $object->getSize()) {
            $data['size'] = $object->getSize();
        }
        if (null !== $object->getDigest()) {
            $data['digest'] = $object->getDigest();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getIcon()) {
            $data['icon'] = $object->getIcon();
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}