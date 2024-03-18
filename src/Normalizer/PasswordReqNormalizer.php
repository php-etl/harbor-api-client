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
    class PasswordReqNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Gyroscops\\Harbor\\Api\\Model\\PasswordReq';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\PasswordReq';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Gyroscops\Harbor\Api\Model\PasswordReq();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('old_password', $data) && $data['old_password'] !== null) {
                $object->setOldPassword($data['old_password']);
            }
            elseif (\array_key_exists('old_password', $data) && $data['old_password'] === null) {
                $object->setOldPassword(null);
            }
            if (\array_key_exists('new_password', $data) && $data['new_password'] !== null) {
                $object->setNewPassword($data['new_password']);
            }
            elseif (\array_key_exists('new_password', $data) && $data['new_password'] === null) {
                $object->setNewPassword(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('oldPassword') && null !== $object->getOldPassword()) {
                $data['old_password'] = $object->getOldPassword();
            }
            if ($object->isInitialized('newPassword') && null !== $object->getNewPassword()) {
                $data['new_password'] = $object->getNewPassword();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Gyroscops\\Harbor\\Api\\Model\\PasswordReq' => false];
        }
    }
} else {
    class PasswordReqNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Gyroscops\\Harbor\\Api\\Model\\PasswordReq';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\PasswordReq';
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
            $object = new \Gyroscops\Harbor\Api\Model\PasswordReq();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('old_password', $data) && $data['old_password'] !== null) {
                $object->setOldPassword($data['old_password']);
            }
            elseif (\array_key_exists('old_password', $data) && $data['old_password'] === null) {
                $object->setOldPassword(null);
            }
            if (\array_key_exists('new_password', $data) && $data['new_password'] !== null) {
                $object->setNewPassword($data['new_password']);
            }
            elseif (\array_key_exists('new_password', $data) && $data['new_password'] === null) {
                $object->setNewPassword(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('oldPassword') && null !== $object->getOldPassword()) {
                $data['old_password'] = $object->getOldPassword();
            }
            if ($object->isInitialized('newPassword') && null !== $object->getNewPassword()) {
                $data['new_password'] = $object->getNewPassword();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Gyroscops\\Harbor\\Api\\Model\\PasswordReq' => false];
        }
    }
}