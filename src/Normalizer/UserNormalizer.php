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
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\User';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\User';
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
        $object = new \Gyroscops\Harbor\Api\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
        }
        if (\array_key_exists('update_time', $data)) {
            $object->setUpdateTime($data['update_time']);
        }
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
        }
        if (\array_key_exists('realname', $data)) {
            $object->setRealname($data['realname']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('creation_time', $data)) {
            $object->setCreationTime($data['creation_time']);
        }
        if (\array_key_exists('admin_role_in_auth', $data)) {
            $object->setAdminRoleInAuth($data['admin_role_in_auth']);
        }
        if (\array_key_exists('role_id', $data)) {
            $object->setRoleId($data['role_id']);
        }
        if (\array_key_exists('sysadmin_flag', $data)) {
            $object->setSysadminFlag($data['sysadmin_flag']);
        }
        if (\array_key_exists('role_name', $data)) {
            $object->setRoleName($data['role_name']);
        }
        if (\array_key_exists('reset_uuid', $data)) {
            $object->setResetUuid($data['reset_uuid']);
        }
        if (\array_key_exists('Salt', $data)) {
            $object->setSalt($data['Salt']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime();
        }
        if (null !== $object->getPassword()) {
            $data['password'] = $object->getPassword();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getRealname()) {
            $data['realname'] = $object->getRealname();
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime();
        }
        if (null !== $object->getAdminRoleInAuth()) {
            $data['admin_role_in_auth'] = $object->getAdminRoleInAuth();
        }
        if (null !== $object->getRoleId()) {
            $data['role_id'] = $object->getRoleId();
        }
        if (null !== $object->getSysadminFlag()) {
            $data['sysadmin_flag'] = $object->getSysadminFlag();
        }
        if (null !== $object->getRoleName()) {
            $data['role_name'] = $object->getRoleName();
        }
        if (null !== $object->getResetUuid()) {
            $data['reset_uuid'] = $object->getResetUuid();
        }
        if (null !== $object->getSalt()) {
            $data['Salt'] = $object->getSalt();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        return $data;
    }
}