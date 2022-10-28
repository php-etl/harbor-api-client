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

class PasswordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Password';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Password';
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
        $object = new \Gyroscops\Harbor\Api\Model\Password();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('new_password', $data) && $data['new_password'] !== null) {
            $object->setNewPassword($data['new_password']);
        } elseif (\array_key_exists('new_password', $data) && $data['new_password'] === null) {
            $object->setNewPassword(null);
        }
        if (\array_key_exists('old_password', $data) && $data['old_password'] !== null) {
            $object->setOldPassword($data['old_password']);
        } elseif (\array_key_exists('old_password', $data) && $data['old_password'] === null) {
            $object->setOldPassword(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNewPassword()) {
            $data['new_password'] = $object->getNewPassword();
        }
        if (null !== $object->getOldPassword()) {
            $data['old_password'] = $object->getOldPassword();
        }
        return $data;
    }
}
