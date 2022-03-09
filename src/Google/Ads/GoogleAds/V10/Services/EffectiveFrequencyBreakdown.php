<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V10\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A breakdown of the number of unique people reached at a given effective
 * frequency.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.services.EffectiveFrequencyBreakdown</code>
 */
class EffectiveFrequencyBreakdown extends \Google\Protobuf\Internal\Message
{
    /**
     * The effective frequency [1-10].
     *
     * Generated from protobuf field <code>int32 effective_frequency = 1;</code>
     */
    protected $effective_frequency = 0;
    /**
     * The number of unique people reached at least effective_frequency times that
     * exactly matches the Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the on_target_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 on_target_reach = 2;</code>
     */
    protected $on_target_reach = 0;
    /**
     * Total number of unique people reached at least effective_frequency times.
     * This includes people that may fall outside the specified Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the total_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 total_reach = 3;</code>
     */
    protected $total_reach = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $effective_frequency
     *           The effective frequency [1-10].
     *     @type int|string $on_target_reach
     *           The number of unique people reached at least effective_frequency times that
     *           exactly matches the Targeting.
     *           Note that a minimum number of unique people must be reached in order for
     *           data to be reported. If the minimum number is not met, the on_target_reach
     *           value will be rounded to 0.
     *     @type int|string $total_reach
     *           Total number of unique people reached at least effective_frequency times.
     *           This includes people that may fall outside the specified Targeting.
     *           Note that a minimum number of unique people must be reached in order for
     *           data to be reported. If the minimum number is not met, the total_reach
     *           value will be rounded to 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The effective frequency [1-10].
     *
     * Generated from protobuf field <code>int32 effective_frequency = 1;</code>
     * @return int
     */
    public function getEffectiveFrequency()
    {
        return $this->effective_frequency;
    }

    /**
     * The effective frequency [1-10].
     *
     * Generated from protobuf field <code>int32 effective_frequency = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEffectiveFrequency($var)
    {
        GPBUtil::checkInt32($var);
        $this->effective_frequency = $var;

        return $this;
    }

    /**
     * The number of unique people reached at least effective_frequency times that
     * exactly matches the Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the on_target_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 on_target_reach = 2;</code>
     * @return int|string
     */
    public function getOnTargetReach()
    {
        return $this->on_target_reach;
    }

    /**
     * The number of unique people reached at least effective_frequency times that
     * exactly matches the Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the on_target_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 on_target_reach = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOnTargetReach($var)
    {
        GPBUtil::checkInt64($var);
        $this->on_target_reach = $var;

        return $this;
    }

    /**
     * Total number of unique people reached at least effective_frequency times.
     * This includes people that may fall outside the specified Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the total_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 total_reach = 3;</code>
     * @return int|string
     */
    public function getTotalReach()
    {
        return $this->total_reach;
    }

    /**
     * Total number of unique people reached at least effective_frequency times.
     * This includes people that may fall outside the specified Targeting.
     * Note that a minimum number of unique people must be reached in order for
     * data to be reported. If the minimum number is not met, the total_reach
     * value will be rounded to 0.
     *
     * Generated from protobuf field <code>int64 total_reach = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalReach($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_reach = $var;

        return $this;
    }

}
