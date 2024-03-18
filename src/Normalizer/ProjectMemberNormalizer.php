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
    class ProjectMemberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMember';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMember';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Gyroscops\Harbor\Api\Model\ProjectMember();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('role_id', $data) && $data['role_id'] !== null) {
                $object->setRoleId($data['role_id']);
            }
            elseif (\array_key_exists('role_id', $data) && $data['role_id'] === null) {
                $object->setRoleId(null);
            }
            if (\array_key_exists('member_user', $data) && $data['member_user'] !== null) {
                $object->setMemberUser($this->denormalizer->denormalize($data['member_user'], 'Gyroscops\\Harbor\\Api\\Model\\UserEntity', 'json', $context));
            }
            elseif (\array_key_exists('member_user', $data) && $data['member_user'] === null) {
                $object->setMemberUser(null);
            }
            if (\array_key_exists('member_group', $data) && $data['member_group'] !== null) {
                $object->setMemberGroup($this->denormalizer->denormalize($data['member_group'], 'Gyroscops\\Harbor\\Api\\Model\\UserGroup', 'json', $context));
            }
            elseif (\array_key_exists('member_group', $data) && $data['member_group'] === null) {
                $object->setMemberGroup(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('roleId') && null !== $object->getRoleId()) {
                $data['role_id'] = $object->getRoleId();
            }
            if ($object->isInitialized('memberUser') && null !== $object->getMemberUser()) {
                $data['member_user'] = $this->normalizer->normalize($object->getMemberUser(), 'json', $context);
            }
            if ($object->isInitialized('memberGroup') && null !== $object->getMemberGroup()) {
                $data['member_group'] = $this->normalizer->normalize($object->getMemberGroup(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Gyroscops\\Harbor\\Api\\Model\\ProjectMember' => false];
        }
    }
} else {
    class ProjectMemberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMember';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ProjectMember';
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
            $object = new \Gyroscops\Harbor\Api\Model\ProjectMember();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('role_id', $data) && $data['role_id'] !== null) {
                $object->setRoleId($data['role_id']);
            }
            elseif (\array_key_exists('role_id', $data) && $data['role_id'] === null) {
                $object->setRoleId(null);
            }
            if (\array_key_exists('member_user', $data) && $data['member_user'] !== null) {
                $object->setMemberUser($this->denormalizer->denormalize($data['member_user'], 'Gyroscops\\Harbor\\Api\\Model\\UserEntity', 'json', $context));
            }
            elseif (\array_key_exists('member_user', $data) && $data['member_user'] === null) {
                $object->setMemberUser(null);
            }
            if (\array_key_exists('member_group', $data) && $data['member_group'] !== null) {
                $object->setMemberGroup($this->denormalizer->denormalize($data['member_group'], 'Gyroscops\\Harbor\\Api\\Model\\UserGroup', 'json', $context));
            }
            elseif (\array_key_exists('member_group', $data) && $data['member_group'] === null) {
                $object->setMemberGroup(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('roleId') && null !== $object->getRoleId()) {
                $data['role_id'] = $object->getRoleId();
            }
            if ($object->isInitialized('memberUser') && null !== $object->getMemberUser()) {
                $data['member_user'] = $this->normalizer->normalize($object->getMemberUser(), 'json', $context);
            }
            if ($object->isInitialized('memberGroup') && null !== $object->getMemberGroup()) {
                $data['member_group'] = $this->normalizer->normalize($object->getMemberGroup(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Gyroscops\\Harbor\\Api\\Model\\ProjectMember' => false];
        }
    }
}