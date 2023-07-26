<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/feed_item_target_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the feed item target mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.MutateFeedItemTargetResult</code>
 */
class MutateFeedItemTargetResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated feed item target with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.FeedItemTarget feed_item_target = 2;</code>
     */
    protected $feed_item_target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V13\Resources\FeedItemTarget $feed_item_target
     *           The mutated feed item target with only mutable fields after mutate. The
     *           field will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\FeedItemTargetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
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
     * The mutated feed item target with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.FeedItemTarget feed_item_target = 2;</code>
     * @return \Google\Ads\GoogleAds\V13\Resources\FeedItemTarget|null
     */
    public function getFeedItemTarget()
    {
        return $this->feed_item_target;
    }

    public function hasFeedItemTarget()
    {
        return isset($this->feed_item_target);
    }

    public function clearFeedItemTarget()
    {
        unset($this->feed_item_target);
    }

    /**
     * The mutated feed item target with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.FeedItemTarget feed_item_target = 2;</code>
     * @param \Google\Ads\GoogleAds\V13\Resources\FeedItemTarget $var
     * @return $this
     */
    public function setFeedItemTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Resources\FeedItemTarget::class);
        $this->feed_item_target = $var;

        return $this;
    }

}
