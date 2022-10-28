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

class EmailServerSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\EmailServerSetting';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\EmailServerSetting';
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
        $object = new \Gyroscops\Harbor\Api\Model\EmailServerSetting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('email_ssl', $data) && $data['email_ssl'] !== null) {
            $object->setEmailSsl($data['email_ssl']);
        } elseif (\array_key_exists('email_ssl', $data) && $data['email_ssl'] === null) {
            $object->setEmailSsl(null);
        }
        if (\array_key_exists('email_password', $data) && $data['email_password'] !== null) {
            $object->setEmailPassword($data['email_password']);
        } elseif (\array_key_exists('email_password', $data) && $data['email_password'] === null) {
            $object->setEmailPassword(null);
        }
        if (\array_key_exists('email_identity', $data) && $data['email_identity'] !== null) {
            $object->setEmailIdentity($data['email_identity']);
        } elseif (\array_key_exists('email_identity', $data) && $data['email_identity'] === null) {
            $object->setEmailIdentity(null);
        }
        if (\array_key_exists('email_port', $data) && $data['email_port'] !== null) {
            $object->setEmailPort($data['email_port']);
        } elseif (\array_key_exists('email_port', $data) && $data['email_port'] === null) {
            $object->setEmailPort(null);
        }
        if (\array_key_exists('email_username', $data) && $data['email_username'] !== null) {
            $object->setEmailUsername($data['email_username']);
        } elseif (\array_key_exists('email_username', $data) && $data['email_username'] === null) {
            $object->setEmailUsername(null);
        }
        if (\array_key_exists('email_host', $data) && $data['email_host'] !== null) {
            $object->setEmailHost($data['email_host']);
        } elseif (\array_key_exists('email_host', $data) && $data['email_host'] === null) {
            $object->setEmailHost(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEmailSsl()) {
            $data['email_ssl'] = $object->getEmailSsl();
        }
        if (null !== $object->getEmailPassword()) {
            $data['email_password'] = $object->getEmailPassword();
        }
        if (null !== $object->getEmailIdentity()) {
            $data['email_identity'] = $object->getEmailIdentity();
        }
        if (null !== $object->getEmailPort()) {
            $data['email_port'] = $object->getEmailPort();
        }
        if (null !== $object->getEmailUsername()) {
            $data['email_username'] = $object->getEmailUsername();
        }
        if (null !== $object->getEmailHost()) {
            $data['email_host'] = $object->getEmailHost();
        }
        return $data;
    }
}
