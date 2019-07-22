<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/conversion_action.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A conversion action.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.ConversionAction</code>
 */
final class ConversionAction extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the conversion action.
     * Conversion action resource names have the form:
     * `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    private $id = null;
    /**
     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    private $name = null;
    /**
     * The status of this conversion action for conversion event accrual.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionStatusEnum.ConversionActionStatus status = 4;</code>
     */
    private $status = 0;
    /**
     * The type of this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionTypeEnum.ConversionActionType type = 5;</code>
     */
    private $type = 0;
    /**
     * The category of conversions reported for this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 6;</code>
     */
    private $category = 0;
    /**
     * The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7;</code>
     */
    private $owner_customer = null;
    /**
     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     */
    private $include_in_conversions_metric = null;
    /**
     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     */
    private $click_through_lookback_window_days = null;
    /**
     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     */
    private $view_through_lookback_window_days = null;
    /**
     * Settings related to the value for conversion events associated with this
     * conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ConversionAction.ValueSettings value_settings = 11;</code>
     */
    private $value_settings = null;
    /**
     * How to count conversion events for the conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionCountingTypeEnum.ConversionActionCountingType counting_type = 12;</code>
     */
    private $counting_type = 0;
    /**
     * Settings related to this conversion action's attribution model.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ConversionAction.AttributionModelSettings attribution_model_settings = 13;</code>
     */
    private $attribution_model_settings = null;
    /**
     * The snippets used for tracking conversions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.TagSnippet tag_snippets = 14;</code>
     */
    private $tag_snippets;
    /**
     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     */
    private $phone_call_duration_seconds = null;
    /**
     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     */
    private $app_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the conversion action.
     *           Conversion action resource names have the form:
     *           `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the conversion action.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the conversion action.
     *           This field is required and should not be empty when creating new
     *           conversion actions.
     *     @type int $status
     *           The status of this conversion action for conversion event accrual.
     *     @type int $type
     *           The type of this conversion action.
     *     @type int $category
     *           The category of conversions reported for this conversion action.
     *     @type \Google\Protobuf\StringValue $owner_customer
     *           The resource name of the conversion action owner customer, or null if this
     *           is a system-defined conversion action.
     *     @type \Google\Protobuf\BoolValue $include_in_conversions_metric
     *           Whether this conversion action should be included in the "conversions"
     *           metric.
     *     @type \Google\Protobuf\Int64Value $click_through_lookback_window_days
     *           The maximum number of days that may elapse between an interaction
     *           (e.g., a click) and a conversion event.
     *     @type \Google\Protobuf\Int64Value $view_through_lookback_window_days
     *           The maximum number of days which may elapse between an impression and a
     *           conversion without an interaction.
     *     @type \Google\Ads\GoogleAds\V2\Resources\ConversionAction\ValueSettings $value_settings
     *           Settings related to the value for conversion events associated with this
     *           conversion action.
     *     @type int $counting_type
     *           How to count conversion events for the conversion action.
     *     @type \Google\Ads\GoogleAds\V2\Resources\ConversionAction\AttributionModelSettings $attribution_model_settings
     *           Settings related to this conversion action's attribution model.
     *     @type \Google\Ads\GoogleAds\V2\Common\TagSnippet[]|\Google\Protobuf\Internal\RepeatedField $tag_snippets
     *           The snippets used for tracking conversions.
     *     @type \Google\Protobuf\Int64Value $phone_call_duration_seconds
     *           The phone call duration in seconds after which a conversion should be
     *           reported for this conversion action.
     *           The value must be between 0 and 10000, inclusive.
     *     @type \Google\Protobuf\StringValue $app_id
     *           App ID for an app conversion action.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\ConversionAction::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the conversion action.
     * Conversion action resource names have the form:
     * `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the conversion action.
     * Conversion action resource names have the form:
     * `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        $wrapper = $this->getId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setId($wrappedVar);
    }

    /**
     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        $wrapper = $this->getName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setName($wrappedVar);
    }

    /**
     * The status of this conversion action for conversion event accrual.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionStatusEnum.ConversionActionStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this conversion action for conversion event accrual.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionStatusEnum.ConversionActionStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ConversionActionStatusEnum_ConversionActionStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The type of this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionTypeEnum.ConversionActionType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionTypeEnum.ConversionActionType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ConversionActionTypeEnum_ConversionActionType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The category of conversions reported for this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 6;</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The category of conversions reported for this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ConversionActionCategoryEnum_ConversionActionCategory::class);
        $this->category = $var;

        return $this;
    }

    /**
     * The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getOwnerCustomer()
    {
        return $this->owner_customer;
    }

    /**
     * Returns the unboxed value from <code>getOwnerCustomer()</code>

     * The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7;</code>
     * @return string|null
     */
    public function getOwnerCustomerUnwrapped()
    {
        $wrapper = $this->getOwnerCustomer();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setOwnerCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->owner_customer = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setOwnerCustomerUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setOwnerCustomer($wrappedVar);
    }

    /**
     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getIncludeInConversionsMetric()
    {
        return $this->include_in_conversions_metric;
    }

    /**
     * Returns the unboxed value from <code>getIncludeInConversionsMetric()</code>

     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     * @return bool|null
     */
    public function getIncludeInConversionsMetricUnwrapped()
    {
        $wrapper = $this->getIncludeInConversionsMetric();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIncludeInConversionsMetric($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->include_in_conversions_metric = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setIncludeInConversionsMetricUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setIncludeInConversionsMetric($wrappedVar);
    }

    /**
     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getClickThroughLookbackWindowDays()
    {
        return $this->click_through_lookback_window_days;
    }

    /**
     * Returns the unboxed value from <code>getClickThroughLookbackWindowDays()</code>

     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     * @return int|string|null
     */
    public function getClickThroughLookbackWindowDaysUnwrapped()
    {
        $wrapper = $this->getClickThroughLookbackWindowDays();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setClickThroughLookbackWindowDays($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->click_through_lookback_window_days = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setClickThroughLookbackWindowDaysUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setClickThroughLookbackWindowDays($wrappedVar);
    }

    /**
     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getViewThroughLookbackWindowDays()
    {
        return $this->view_through_lookback_window_days;
    }

    /**
     * Returns the unboxed value from <code>getViewThroughLookbackWindowDays()</code>

     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     * @return int|string|null
     */
    public function getViewThroughLookbackWindowDaysUnwrapped()
    {
        $wrapper = $this->getViewThroughLookbackWindowDays();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setViewThroughLookbackWindowDays($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->view_through_lookback_window_days = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setViewThroughLookbackWindowDaysUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setViewThroughLookbackWindowDays($wrappedVar);
    }

    /**
     * Settings related to the value for conversion events associated with this
     * conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ConversionAction.ValueSettings value_settings = 11;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\ConversionAction\ValueSettings
     */
    public function getValueSettings()
    {
        return $this->value_settings;
    }

    /**
     * Settings related to the value for conversion events associated with this
     * conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ConversionAction.ValueSettings value_settings = 11;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\ConversionAction\ValueSettings $var
     * @return $this
     */
    public function setValueSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\ConversionAction_ValueSettings::class);
        $this->value_settings = $var;

        return $this;
    }

    /**
     * How to count conversion events for the conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionCountingTypeEnum.ConversionActionCountingType counting_type = 12;</code>
     * @return int
     */
    public function getCountingType()
    {
        return $this->counting_type;
    }

    /**
     * How to count conversion events for the conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ConversionActionCountingTypeEnum.ConversionActionCountingType counting_type = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCountingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ConversionActionCountingTypeEnum_ConversionActionCountingType::class);
        $this->counting_type = $var;

        return $this;
    }

    /**
     * Settings related to this conversion action's attribution model.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ConversionAction.AttributionModelSettings attribution_model_settings = 13;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\ConversionAction\AttributionModelSettings
     */
    public function getAttributionModelSettings()
    {
        return $this->attribution_model_settings;
    }

    /**
     * Settings related to this conversion action's attribution model.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ConversionAction.AttributionModelSettings attribution_model_settings = 13;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\ConversionAction\AttributionModelSettings $var
     * @return $this
     */
    public function setAttributionModelSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\ConversionAction_AttributionModelSettings::class);
        $this->attribution_model_settings = $var;

        return $this;
    }

    /**
     * The snippets used for tracking conversions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.TagSnippet tag_snippets = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTagSnippets()
    {
        return $this->tag_snippets;
    }

    /**
     * The snippets used for tracking conversions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.TagSnippet tag_snippets = 14;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\TagSnippet[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTagSnippets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\TagSnippet::class);
        $this->tag_snippets = $arr;

        return $this;
    }

    /**
     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPhoneCallDurationSeconds()
    {
        return $this->phone_call_duration_seconds;
    }

    /**
     * Returns the unboxed value from <code>getPhoneCallDurationSeconds()</code>

     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     * @return int|string|null
     */
    public function getPhoneCallDurationSecondsUnwrapped()
    {
        $wrapper = $this->getPhoneCallDurationSeconds();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPhoneCallDurationSeconds($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->phone_call_duration_seconds = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPhoneCallDurationSecondsUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setPhoneCallDurationSeconds($wrappedVar);
    }

    /**
     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Returns the unboxed value from <code>getAppId()</code>

     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     * @return string|null
     */
    public function getAppIdUnwrapped()
    {
        $wrapper = $this->getAppId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAppIdUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setAppId($wrappedVar);
    }

}
