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
class ProjectMemberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\ProjectMember';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\ProjectMember';
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
        $object = new \Harbor\Api\Model\ProjectMember();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('role_id', $data)) {
            $object->setRoleId($data['role_id']);
        }
        if (\array_key_exists('member_group', $data)) {
            $object->setMemberGroup($this->denormalizer->denormalize($data['member_group'], 'Harbor\\Api\\Model\\UserGroup', 'json', $context));
        }
        if (\array_key_exists('member_user', $data)) {
            $object->setMemberUser($this->denormalizer->denormalize($data['member_user'], 'Harbor\\Api\\Model\\UserEntity', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRoleId()) {
            $data['role_id'] = $object->getRoleId();
        }
        if (null !== $object->getMemberGroup()) {
            $data['member_group'] = $this->normalizer->normalize($object->getMemberGroup(), 'json', $context);
        }
        if (null !== $object->getMemberUser()) {
            $data['member_user'] = $this->normalizer->normalize($object->getMemberUser(), 'json', $context);
        }
        return $data;
    }
}