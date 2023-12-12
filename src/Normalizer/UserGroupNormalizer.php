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
class UserGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\UserGroup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\UserGroup';
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
        $object = new \Gyroscops\Harbor\Api\Model\UserGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('group_name', $data) && $data['group_name'] !== null) {
            $object->setGroupName($data['group_name']);
        }
        elseif (\array_key_exists('group_name', $data) && $data['group_name'] === null) {
            $object->setGroupName(null);
        }
        if (\array_key_exists('group_type', $data) && $data['group_type'] !== null) {
            $object->setGroupType($data['group_type']);
        }
        elseif (\array_key_exists('group_type', $data) && $data['group_type'] === null) {
            $object->setGroupType(null);
        }
        if (\array_key_exists('ldap_group_dn', $data) && $data['ldap_group_dn'] !== null) {
            $object->setLdapGroupDn($data['ldap_group_dn']);
        }
        elseif (\array_key_exists('ldap_group_dn', $data) && $data['ldap_group_dn'] === null) {
            $object->setLdapGroupDn(null);
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
        if (null !== $object->getGroupName()) {
            $data['group_name'] = $object->getGroupName();
        }
        if (null !== $object->getGroupType()) {
            $data['group_type'] = $object->getGroupType();
        }
        if (null !== $object->getLdapGroupDn()) {
            $data['ldap_group_dn'] = $object->getLdapGroupDn();
        }
        return $data;
    }
}