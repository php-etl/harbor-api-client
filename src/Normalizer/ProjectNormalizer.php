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
class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Project';
    }
    public function supportsNormalization($data, $format = null)
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
        if (\array_key_exists('update_time', $data)) {
            $object->setUpdateTime($data['update_time']);
        }
        if (\array_key_exists('owner_name', $data)) {
            $object->setOwnerName($data['owner_name']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('owner_id', $data)) {
            $object->setOwnerId($data['owner_id']);
        }
        if (\array_key_exists('repo_count', $data)) {
            $object->setRepoCount($data['repo_count']);
        }
        if (\array_key_exists('creation_time', $data)) {
            $object->setCreationTime($data['creation_time']);
        }
        if (\array_key_exists('togglable', $data)) {
            $object->setTogglable($data['togglable']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (\array_key_exists('current_user_role_id', $data)) {
            $object->setCurrentUserRoleId($data['current_user_role_id']);
        }
        if (\array_key_exists('current_user_role_ids', $data)) {
            $values = array();
            foreach ($data['current_user_role_ids'] as $value) {
                $values[] = $value;
            }
            $object->setCurrentUserRoleIds($values);
        }
        if (\array_key_exists('chart_count', $data)) {
            $object->setChartCount($data['chart_count']);
        }
        if (\array_key_exists('cve_whitelist', $data)) {
            $object->setCveWhitelist($this->denormalizer->denormalize($data['cve_whitelist'], 'Gyroscops\\Harbor\\Api\\Model\\CVEWhitelist', 'json', $context));
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime();
        }
        if (null !== $object->getOwnerName()) {
            $data['owner_name'] = $object->getOwnerName();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getOwnerId()) {
            $data['owner_id'] = $object->getOwnerId();
        }
        if (null !== $object->getRepoCount()) {
            $data['repo_count'] = $object->getRepoCount();
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime();
        }
        if (null !== $object->getTogglable()) {
            $data['togglable'] = $object->getTogglable();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getCurrentUserRoleId()) {
            $data['current_user_role_id'] = $object->getCurrentUserRoleId();
        }
        if (null !== $object->getCurrentUserRoleIds()) {
            $values = array();
            foreach ($object->getCurrentUserRoleIds() as $value) {
                $values[] = $value;
            }
            $data['current_user_role_ids'] = $values;
        }
        if (null !== $object->getChartCount()) {
            $data['chart_count'] = $object->getChartCount();
        }
        if (null !== $object->getCveWhitelist()) {
            $data['cve_whitelist'] = $this->normalizer->normalize($object->getCveWhitelist(), 'json', $context);
        }
        if (null !== $object->getMetadata()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        return $data;
    }
}