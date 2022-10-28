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

class LdapUsersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\LdapUsers';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\LdapUsers';
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
        $object = new \Gyroscops\Harbor\Api\Model\LdapUsers();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ldap_email', $data) && $data['ldap_email'] !== null) {
            $object->setLdapEmail($data['ldap_email']);
        } elseif (\array_key_exists('ldap_email', $data) && $data['ldap_email'] === null) {
            $object->setLdapEmail(null);
        }
        if (\array_key_exists('ldap_realname', $data) && $data['ldap_realname'] !== null) {
            $object->setLdapRealname($data['ldap_realname']);
        } elseif (\array_key_exists('ldap_realname', $data) && $data['ldap_realname'] === null) {
            $object->setLdapRealname(null);
        }
        if (\array_key_exists('ldap_username', $data) && $data['ldap_username'] !== null) {
            $object->setLdapUsername($data['ldap_username']);
        } elseif (\array_key_exists('ldap_username', $data) && $data['ldap_username'] === null) {
            $object->setLdapUsername(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLdapEmail()) {
            $data['ldap_email'] = $object->getLdapEmail();
        }
        if (null !== $object->getLdapRealname()) {
            $data['ldap_realname'] = $object->getLdapRealname();
        }
        if (null !== $object->getLdapUsername()) {
            $data['ldap_username'] = $object->getLdapUsername();
        }
        return $data;
    }
}
