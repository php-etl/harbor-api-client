<?php

namespace Harbor\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Harbor\Api\Runtime\Normalizer\CheckArray;
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
        return $type === 'Harbor\\Api\\Model\\UserGroup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\UserGroup';
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
        $object = new \Harbor\Api\Model\UserGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('group_name', $data)) {
            $object->setGroupName($data['group_name']);
        }
        if (\array_key_exists('ldap_group_dn', $data)) {
            $object->setLdapGroupDn($data['ldap_group_dn']);
        }
        if (\array_key_exists('group_type', $data)) {
            $object->setGroupType($data['group_type']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGroupName()) {
            $data['group_name'] = $object->getGroupName();
        }
        if (null !== $object->getLdapGroupDn()) {
            $data['ldap_group_dn'] = $object->getLdapGroupDn();
        }
        if (null !== $object->getGroupType()) {
            $data['group_type'] = $object->getGroupType();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        return $data;
    }
}