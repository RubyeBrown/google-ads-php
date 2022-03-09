<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/experiment_arm.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class ExperimentArm
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v10/resources/experiment_arm.proto"google.ads.googleads.v10.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�


&googleads.googleapis.com/ExperimentArm:
trial (	B+�A�A%
#googleads.googleapis.com/Experiment
name (	B�A
control (

	campaigns (	B&�A#
!googleads.googleapis.com/CampaignF
in_design_campaigns (	B)�A�A#
!googleads.googleapis.com/Campaign:m�Aj
&googleads.googleapis.com/ExperimentArm@customers/{customer_id}/experimentArms/{trial_id}~{trial_arm_id}B�
&com.google.ads.googleads.v10.resourcesBExperimentArmProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}
