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
class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Project';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Project';
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
        $object = new \Gyroscops\Harbor\Api\Model\Project();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        }
        elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('owner_id', $data) && $data['owner_id'] !== null) {
            $object->setOwnerId($data['owner_id']);
        }
        elseif (\array_key_exists('owner_id', $data) && $data['owner_id'] === null) {
            $object->setOwnerId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('registry_id', $data) && $data['registry_id'] !== null) {
            $object->setRegistryId($data['registry_id']);
        }
        elseif (\array_key_exists('registry_id', $data) && $data['registry_id'] === null) {
            $object->setRegistryId(null);
        }
        if (\array_key_exists('creation_time', $data) && $data['creation_time'] !== null) {
            $object->setCreationTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['creation_time']));
        }
        elseif (\array_key_exists('creation_time', $data) && $data['creation_time'] === null) {
            $object->setCreationTime(null);
        }
        if (\array_key_exists('update_time', $data) && $data['update_time'] !== null) {
            $object->setUpdateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['update_time']));
        }
        elseif (\array_key_exists('update_time', $data) && $data['update_time'] === null) {
            $object->setUpdateTime(null);
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted($data['deleted']);
        }
        elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('owner_name', $data) && $data['owner_name'] !== null) {
            $object->setOwnerName($data['owner_name']);
        }
        elseif (\array_key_exists('owner_name', $data) && $data['owner_name'] === null) {
            $object->setOwnerName(null);
        }
        if (\array_key_exists('togglable', $data) && $data['togglable'] !== null) {
            $object->setTogglable($data['togglable']);
        }
        elseif (\array_key_exists('togglable', $data) && $data['togglable'] === null) {
            $object->setTogglable(null);
        }
        if (\array_key_exists('current_user_role_id', $data) && $data['current_user_role_id'] !== null) {
            $object->setCurrentUserRoleId($data['current_user_role_id']);
        }
        elseif (\array_key_exists('current_user_role_id', $data) && $data['current_user_role_id'] === null) {
            $object->setCurrentUserRoleId(null);
        }
        if (\array_key_exists('current_user_role_ids', $data) && $data['current_user_role_ids'] !== null) {
            $values = array();
            foreach ($data['current_user_role_ids'] as $value) {
                $values[] = $value;
            }
            $object->setCurrentUserRoleIds($values);
        }
        elseif (\array_key_exists('current_user_role_ids', $data) && $data['current_user_role_ids'] === null) {
            $object->setCurrentUserRoleIds(null);
        }
        if (\array_key_exists('repo_count', $data) && $data['repo_count'] !== null) {
            $object->setRepoCount($data['repo_count']);
        }
        elseif (\array_key_exists('repo_count', $data) && $data['repo_count'] === null) {
            $object->setRepoCount(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata', 'json', $context));
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('cve_allowlist', $data) && $data['cve_allowlist'] !== null) {
            $object->setCveAllowlist($this->denormalizer->denormalize($data['cve_allowlist'], 'Gyroscops\\Harbor\\Api\\Model\\CVEAllowlist', 'json', $context));
        }
        elseif (\array_key_exists('cve_allowlist', $data) && $data['cve_allowlist'] === null) {
            $object->setCveAllowlist(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if ($object->isInitialized('ownerId') && null !== $object->getOwnerId()) {
            $data['owner_id'] = $object->getOwnerId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('registryId') && null !== $object->getRegistryId()) {
            $data['registry_id'] = $object->getRegistryId();
        }
        if ($object->isInitialized('creationTime') && null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:s.vp');
        }
        if ($object->isInitialized('updateTime') && null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:s.vp');
        }
        if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if ($object->isInitialized('ownerName') && null !== $object->getOwnerName()) {
            $data['owner_name'] = $object->getOwnerName();
        }
        if ($object->isInitialized('togglable') && null !== $object->getTogglable()) {
            $data['togglable'] = $object->getTogglable();
        }
        if ($object->isInitialized('currentUserRoleId') && null !== $object->getCurrentUserRoleId()) {
            $data['current_user_role_id'] = $object->getCurrentUserRoleId();
        }
        if ($object->isInitialized('currentUserRoleIds') && null !== $object->getCurrentUserRoleIds()) {
            $values = array();
            foreach ($object->getCurrentUserRoleIds() as $value) {
                $values[] = $value;
            }
            $data['current_user_role_ids'] = $values;
        }
        if ($object->isInitialized('repoCount') && null !== $object->getRepoCount()) {
            $data['repo_count'] = $object->getRepoCount();
        }
        if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        if ($object->isInitialized('cveAllowlist') && null !== $object->getCveAllowlist()) {
            $data['cve_allowlist'] = $this->normalizer->normalize($object->getCveAllowlist(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Gyroscops\\Harbor\\Api\\Model\\Project' => false);
    }
}