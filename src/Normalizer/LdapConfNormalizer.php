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

class LdapConfNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\LdapConf';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\LdapConf';
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
        $object = new \Gyroscops\Harbor\Api\Model\LdapConf();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ldap_url', $data) && $data['ldap_url'] !== null) {
            $object->setLdapUrl($data['ldap_url']);
        } elseif (\array_key_exists('ldap_url', $data) && $data['ldap_url'] === null) {
            $object->setLdapUrl(null);
        }
        if (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] !== null) {
            $object->setLdapUid($data['ldap_uid']);
        } elseif (\array_key_exists('ldap_uid', $data) && $data['ldap_uid'] === null) {
            $object->setLdapUid(null);
        }
        if (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] !== null) {
            $object->setLdapSearchDn($data['ldap_search_dn']);
        } elseif (\array_key_exists('ldap_search_dn', $data) && $data['ldap_search_dn'] === null) {
            $object->setLdapSearchDn(null);
        }
        if (\array_key_exists('ldap_connection_timeout', $data) && $data['ldap_connection_timeout'] !== null) {
            $object->setLdapConnectionTimeout($data['ldap_connection_timeout']);
        } elseif (\array_key_exists('ldap_connection_timeout', $data) && $data['ldap_connection_timeout'] === null) {
            $object->setLdapConnectionTimeout(null);
        }
        if (\array_key_exists('ldap_search_password', $data) && $data['ldap_search_password'] !== null) {
            $object->setLdapSearchPassword($data['ldap_search_password']);
        } elseif (\array_key_exists('ldap_search_password', $data) && $data['ldap_search_password'] === null) {
            $object->setLdapSearchPassword(null);
        }
        if (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] !== null) {
            $object->setLdapScope($data['ldap_scope']);
        } elseif (\array_key_exists('ldap_scope', $data) && $data['ldap_scope'] === null) {
            $object->setLdapScope(null);
        }
        if (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] !== null) {
            $object->setLdapBaseDn($data['ldap_base_dn']);
        } elseif (\array_key_exists('ldap_base_dn', $data) && $data['ldap_base_dn'] === null) {
            $object->setLdapBaseDn(null);
        }
        if (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] !== null) {
            $object->setLdapFilter($data['ldap_filter']);
        } elseif (\array_key_exists('ldap_filter', $data) && $data['ldap_filter'] === null) {
            $object->setLdapFilter(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLdapUrl()) {
            $data['ldap_url'] = $object->getLdapUrl();
        }
        if (null !== $object->getLdapUid()) {
            $data['ldap_uid'] = $object->getLdapUid();
        }
        if (null !== $object->getLdapSearchDn()) {
            $data['ldap_search_dn'] = $object->getLdapSearchDn();
        }
        if (null !== $object->getLdapConnectionTimeout()) {
            $data['ldap_connection_timeout'] = $object->getLdapConnectionTimeout();
        }
        if (null !== $object->getLdapSearchPassword()) {
            $data['ldap_search_password'] = $object->getLdapSearchPassword();
        }
        if (null !== $object->getLdapScope()) {
            $data['ldap_scope'] = $object->getLdapScope();
        }
        if (null !== $object->getLdapBaseDn()) {
            $data['ldap_base_dn'] = $object->getLdapBaseDn();
        }
        if (null !== $object->getLdapFilter()) {
            $data['ldap_filter'] = $object->getLdapFilter();
        }
        return $data;
    }
}
