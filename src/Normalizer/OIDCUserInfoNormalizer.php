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
    class OIDCUserInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Gyroscops\Harbor\Api\Model\OIDCUserInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
                $object->setUserId($data['user_id']);
            }
            elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
                $object->setUserId(null);
            }
            if (\array_key_exists('subiss', $data) && $data['subiss'] !== null) {
                $object->setSubiss($data['subiss']);
            }
            elseif (\array_key_exists('subiss', $data) && $data['subiss'] === null) {
                $object->setSubiss(null);
            }
            if (\array_key_exists('secret', $data) && $data['secret'] !== null) {
                $object->setSecret($data['secret']);
            }
            elseif (\array_key_exists('secret', $data) && $data['secret'] === null) {
                $object->setSecret(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['user_id'] = $object->getUserId();
            }
            if ($object->isInitialized('subiss') && null !== $object->getSubiss()) {
                $data['subiss'] = $object->getSubiss();
            }
            if ($object->isInitialized('secret') && null !== $object->getSecret()) {
                $data['secret'] = $object->getSecret();
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
            return ['Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo' => false];
        }
    }
} else {
    class OIDCUserInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo';
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
            $object = new \Gyroscops\Harbor\Api\Model\OIDCUserInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
                $object->setUserId($data['user_id']);
            }
            elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
                $object->setUserId(null);
            }
            if (\array_key_exists('subiss', $data) && $data['subiss'] !== null) {
                $object->setSubiss($data['subiss']);
            }
            elseif (\array_key_exists('subiss', $data) && $data['subiss'] === null) {
                $object->setSubiss(null);
            }
            if (\array_key_exists('secret', $data) && $data['secret'] !== null) {
                $object->setSecret($data['secret']);
            }
            elseif (\array_key_exists('secret', $data) && $data['secret'] === null) {
                $object->setSecret(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['user_id'] = $object->getUserId();
            }
            if ($object->isInitialized('subiss') && null !== $object->getSubiss()) {
                $data['subiss'] = $object->getSubiss();
            }
            if ($object->isInitialized('secret') && null !== $object->getSecret()) {
                $data['secret'] = $object->getSecret();
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
            return ['Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo' => false];
        }
    }
}