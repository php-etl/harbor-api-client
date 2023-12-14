<?php

namespace Gyroscops\Harbor\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Gyroscops\Harbor\Api\Runtime\Normalizer\CheckArray;
use Gyroscops\Harbor\Api\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        }
        elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('entity_name', $data) && $data['entity_name'] !== null) {
            $object->setEntityName($data['entity_name']);
        }
        elseif (\array_key_exists('entity_name', $data) && $data['entity_name'] === null) {
            $object->setEntityName(null);
        }
        if (\array_key_exists('role_name', $data) && $data['role_name'] !== null) {
            $object->setRoleName($data['role_name']);
        }
        elseif (\array_key_exists('role_name', $data) && $data['role_name'] === null) {
            $object->setRoleName(null);
        }
        if (\array_key_exists('role_id', $data) && $data['role_id'] !== null) {
            $object->setRoleId($data['role_id']);
        }
        elseif (\array_key_exists('role_id', $data) && $data['role_id'] === null) {
            $object->setRoleId(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        }
        elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('entity_type', $data) && $data['entity_type'] !== null) {
            $object->setEntityType($data['entity_type']);
        }
        elseif (\array_key_exists('entity_type', $data) && $data['entity_type'] === null) {
            $object->setEntityType(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('entityName') && null !== $object->getEntityName()) {
            $data['entity_name'] = $object->getEntityName();
        }
        if ($object->isInitialized('roleName') && null !== $object->getRoleName()) {
            $data['role_name'] = $object->getRoleName();
        }
        if ($object->isInitialized('roleId') && null !== $object->getRoleId()) {
            $data['role_id'] = $object->getRoleId();
        }
        if ($object->isInitialized('entityId') && null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if ($object->isInitialized('entityType') && null !== $object->getEntityType()) {
            $data['entity_type'] = $object->getEntityType();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity' => false);
    }
}