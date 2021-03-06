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
class ProjectMemberEntityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity';
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
        $object = new \Gyroscops\Harbor\Api\Model\ProjectMemberEntity();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('role_name', $data)) {
            $object->setRoleName($data['role_name']);
        }
        if (\array_key_exists('entity_name', $data)) {
            $object->setEntityName($data['entity_name']);
        }
        if (\array_key_exists('entity_type', $data)) {
            $object->setEntityType($data['entity_type']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('role_id', $data)) {
            $object->setRoleId($data['role_id']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getRoleName()) {
            $data['role_name'] = $object->getRoleName();
        }
        if (null !== $object->getEntityName()) {
            $data['entity_name'] = $object->getEntityName();
        }
        if (null !== $object->getEntityType()) {
            $data['entity_type'] = $object->getEntityType();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getRoleId()) {
            $data['role_id'] = $object->getRoleId();
        }
        return $data;
    }
}