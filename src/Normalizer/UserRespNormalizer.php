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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class UserRespNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Gyroscops\\Harbor\\Api\\Model\\UserResp';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\UserResp';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Gyroscops\Harbor\Api\Model\UserResp();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('realname', $data) && $data['realname'] !== null) {
                $object->setRealname($data['realname']);
            }
            elseif (\array_key_exists('realname', $data) && $data['realname'] === null) {
                $object->setRealname(null);
            }
            if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
                $object->setComment($data['comment']);
            }
            elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
                $object->setComment(null);
            }
            if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
                $object->setUserId($data['user_id']);
            }
            elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
                $object->setUserId(null);
            }
            if (\array_key_exists('username', $data) && $data['username'] !== null) {
                $object->setUsername($data['username']);
            }
            elseif (\array_key_exists('username', $data) && $data['username'] === null) {
                $object->setUsername(null);
            }
            if (\array_key_exists('sysadmin_flag', $data) && $data['sysadmin_flag'] !== null) {
                $object->setSysadminFlag($data['sysadmin_flag']);
            }
            elseif (\array_key_exists('sysadmin_flag', $data) && $data['sysadmin_flag'] === null) {
                $object->setSysadminFlag(null);
            }
            if (\array_key_exists('admin_role_in_auth', $data) && $data['admin_role_in_auth'] !== null) {
                $object->setAdminRoleInAuth($data['admin_role_in_auth']);
            }
            elseif (\array_key_exists('admin_role_in_auth', $data) && $data['admin_role_in_auth'] === null) {
                $object->setAdminRoleInAuth(null);
            }
            if (\array_key_exists('oidc_user_meta', $data) && $data['oidc_user_meta'] !== null) {
                $object->setOidcUserMeta($this->denormalizer->denormalize($data['oidc_user_meta'], 'Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo', 'json', $context));
            }
            elseif (\array_key_exists('oidc_user_meta', $data) && $data['oidc_user_meta'] === null) {
                $object->setOidcUserMeta(null);
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
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('realname') && null !== $object->getRealname()) {
                $data['realname'] = $object->getRealname();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['user_id'] = $object->getUserId();
            }
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }
            if ($object->isInitialized('sysadminFlag') && null !== $object->getSysadminFlag()) {
                $data['sysadmin_flag'] = $object->getSysadminFlag();
            }
            if ($object->isInitialized('adminRoleInAuth') && null !== $object->getAdminRoleInAuth()) {
                $data['admin_role_in_auth'] = $object->getAdminRoleInAuth();
            }
            if ($object->isInitialized('oidcUserMeta') && null !== $object->getOidcUserMeta()) {
                $data['oidc_user_meta'] = $this->normalizer->normalize($object->getOidcUserMeta(), 'json', $context);
            }
            if ($object->isInitialized('creationTime') && null !== $object->getCreationTime()) {
                $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:s.vp');
            }
            if ($object->isInitialized('updateTime') && null !== $object->getUpdateTime()) {
                $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:s.vp');
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Gyroscops\\Harbor\\Api\\Model\\UserResp' => false];
        }
    }
} else {
    class UserRespNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Gyroscops\\Harbor\\Api\\Model\\UserResp';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\UserResp';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Gyroscops\Harbor\Api\Model\UserResp();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('realname', $data) && $data['realname'] !== null) {
                $object->setRealname($data['realname']);
            }
            elseif (\array_key_exists('realname', $data) && $data['realname'] === null) {
                $object->setRealname(null);
            }
            if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
                $object->setComment($data['comment']);
            }
            elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
                $object->setComment(null);
            }
            if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
                $object->setUserId($data['user_id']);
            }
            elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
                $object->setUserId(null);
            }
            if (\array_key_exists('username', $data) && $data['username'] !== null) {
                $object->setUsername($data['username']);
            }
            elseif (\array_key_exists('username', $data) && $data['username'] === null) {
                $object->setUsername(null);
            }
            if (\array_key_exists('sysadmin_flag', $data) && $data['sysadmin_flag'] !== null) {
                $object->setSysadminFlag($data['sysadmin_flag']);
            }
            elseif (\array_key_exists('sysadmin_flag', $data) && $data['sysadmin_flag'] === null) {
                $object->setSysadminFlag(null);
            }
            if (\array_key_exists('admin_role_in_auth', $data) && $data['admin_role_in_auth'] !== null) {
                $object->setAdminRoleInAuth($data['admin_role_in_auth']);
            }
            elseif (\array_key_exists('admin_role_in_auth', $data) && $data['admin_role_in_auth'] === null) {
                $object->setAdminRoleInAuth(null);
            }
            if (\array_key_exists('oidc_user_meta', $data) && $data['oidc_user_meta'] !== null) {
                $object->setOidcUserMeta($this->denormalizer->denormalize($data['oidc_user_meta'], 'Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo', 'json', $context));
            }
            elseif (\array_key_exists('oidc_user_meta', $data) && $data['oidc_user_meta'] === null) {
                $object->setOidcUserMeta(null);
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
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('realname') && null !== $object->getRealname()) {
                $data['realname'] = $object->getRealname();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['user_id'] = $object->getUserId();
            }
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }
            if ($object->isInitialized('sysadminFlag') && null !== $object->getSysadminFlag()) {
                $data['sysadmin_flag'] = $object->getSysadminFlag();
            }
            if ($object->isInitialized('adminRoleInAuth') && null !== $object->getAdminRoleInAuth()) {
                $data['admin_role_in_auth'] = $object->getAdminRoleInAuth();
            }
            if ($object->isInitialized('oidcUserMeta') && null !== $object->getOidcUserMeta()) {
                $data['oidc_user_meta'] = $this->normalizer->normalize($object->getOidcUserMeta(), 'json', $context);
            }
            if ($object->isInitialized('creationTime') && null !== $object->getCreationTime()) {
                $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:s.vp');
            }
            if ($object->isInitialized('updateTime') && null !== $object->getUpdateTime()) {
                $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:s.vp');
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Gyroscops\\Harbor\\Api\\Model\\UserResp' => false];
        }
    }
}