<?php

namespace Gyroscops\Harbor\Api\Normalizer;

use Gyroscops\Harbor\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Gyroscops\\Harbor\\Api\\Model\\Errors' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ErrorsNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Error' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ErrorNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\SearchRepository' => 'Gyroscops\\Harbor\\Api\\Normalizer\\SearchRepositoryNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Tag' => 'Gyroscops\\Harbor\\Api\\Normalizer\\TagNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\AdditionLink' => 'Gyroscops\\Harbor\\Api\\Normalizer\\AdditionLinkNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Reference' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ReferenceNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Platform' => 'Gyroscops\\Harbor\\Api\\Normalizer\\PlatformNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Label' => 'Gyroscops\\Harbor\\Api\\Normalizer\\LabelNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Scanner' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ScannerNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\NativeReportSummary' => 'Gyroscops\\Harbor\\Api\\Normalizer\\NativeReportSummaryNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\VulnerabilitySummary' => 'Gyroscops\\Harbor\\Api\\Normalizer\\VulnerabilitySummaryNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Metrics' => 'Gyroscops\\Harbor\\Api\\Normalizer\\MetricsNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ProjectReq' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectReqNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Project' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectMetadataNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ProjectSummaryQuota' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectSummaryQuotaNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\CVEAllowlist' => 'Gyroscops\\Harbor\\Api\\Normalizer\\CVEAllowlistNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\CVEAllowlistItem' => 'Gyroscops\\Harbor\\Api\\Normalizer\\CVEAllowlistItemNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ReplicationTrigger' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ReplicationTriggerNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ReplicationTriggerSettings' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ReplicationTriggerSettingsNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ReplicationFilter' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ReplicationFilterNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RegistryCredential' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RegistryCredentialNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Registry' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RegistryNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderEndpointPattern' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RegistryProviderEndpointPatternNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderCredentialPattern' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RegistryProviderCredentialPatternNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RegistryEndpoint' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RegistryEndpointNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\FilterStyle' => 'Gyroscops\\Harbor\\Api\\Normalizer\\FilterStyleNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RobotPermission' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RobotPermissionNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Access' => 'Gyroscops\\Harbor\\Api\\Normalizer\\AccessNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Storage' => 'Gyroscops\\Harbor\\Api\\Normalizer\\StorageNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\AuthproxySetting' => 'Gyroscops\\Harbor\\Api\\Normalizer\\AuthproxySettingNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ScheduleObj' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ScheduleObjNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RetentionRuleMetadata' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RetentionRuleMetadataNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RetentionRuleParamMetadata' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RetentionRuleParamMetadataNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RetentionSelectorMetadata' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RetentionSelectorMetadataNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RetentionRuleTrigger' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RetentionRuleTriggerNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RetentionPolicyScope' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RetentionPolicyScopeNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RetentionRule' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RetentionRuleNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RetentionSelector' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RetentionSelectorNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ScannerCapability' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ScannerCapabilityNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ImmutableSelector' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ImmutableSelectorNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserGroup' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserGroupNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\PayloadFormat' => 'Gyroscops\\Harbor\\Api\\Normalizer\\PayloadFormatNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\WebhookTargetObject' => 'Gyroscops\\Harbor\\Api\\Normalizer\\WebhookTargetObjectNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ConfigurationsResponseScanAllPolicy' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ConfigurationsResponseScanAllPolicyNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ConfigurationsResponseScanAllPolicyParameter' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ConfigurationsResponseScanAllPolicyParameterNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\StringConfigItem' => 'Gyroscops\\Harbor\\Api\\Normalizer\\StringConfigItemNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\BoolConfigItem' => 'Gyroscops\\Harbor\\Api\\Normalizer\\BoolConfigItemNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\IntegerConfigItem' => 'Gyroscops\\Harbor\\Api\\Normalizer\\IntegerConfigItemNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectMemberEntityNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ProjectMember' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectMemberNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RoleRequest' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RoleRequestNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserEntity' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserEntityNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserProfile' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserProfileNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserCreationReq' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserCreationReqNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo' => 'Gyroscops\\Harbor\\Api\\Normalizer\\OIDCUserInfoNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserResp' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserRespNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\PasswordReq' => 'Gyroscops\\Harbor\\Api\\Normalizer\\PasswordReqNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserSearchRespItem' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserSearchRespItemNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Permission' => 'Gyroscops\\Harbor\\Api\\Normalizer\\PermissionNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ComponentHealthStatus' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ComponentHealthStatusNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Accessory' => 'Gyroscops\\Harbor\\Api\\Normalizer\\AccessoryNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ScanDataExportExecution' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ScanDataExportExecutionNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\DangerousCVE' => 'Gyroscops\\Harbor\\Api\\Normalizer\\DangerousCVENormalizer', 'Gyroscops\\Harbor\\Api\\Model\\DangerousArtifact' => 'Gyroscops\\Harbor\\Api\\Normalizer\\DangerousArtifactNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Gyroscops\\Harbor\\Api\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    /**
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}