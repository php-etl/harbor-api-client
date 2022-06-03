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
        if (\array_key_exists('email_ssl', $data)) {
            $object->setEmailSsl($data['email_ssl']);
        }
        if (\array_key_exists('email_password', $data)) {
            $object->setEmailPassword($data['email_password']);
        }
        if (\array_key_exists('email_identity', $data)) {
            $object->setEmailIdentity($data['email_identity']);
        }
        if (\array_key_exists('email_port', $data)) {
            $object->setEmailPort($data['email_port']);
        }
        if (\array_key_exists('email_username', $data)) {
            $object->setEmailUsername($data['email_username']);
        }
        if (\array_key_exists('email_host', $data)) {
            $object->setEmailHost($data['email_host']);
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