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
class RoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\Role';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\Role';
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
        $object = new \Harbor\Api\Model\Role();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('role_mask', $data)) {
            $object->setRoleMask($data['role_mask']);
        }
        if (\array_key_exists('role_name', $data)) {
            $object->setRoleName($data['role_name']);
        }
        if (\array_key_exists('role_code', $data)) {
            $object->setRoleCode($data['role_code']);
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
        if (null !== $object->getRoleMask()) {
            $data['role_mask'] = $object->getRoleMask();
        }
        if (null !== $object->getRoleName()) {
            $data['role_name'] = $object->getRoleName();
        }
        if (null !== $object->getRoleCode()) {
            $data['role_code'] = $object->getRoleCode();
        }
        if (null !== $object->getRoleId()) {
            $data['role_id'] = $object->getRoleId();
        }
        return $data;
    }
}