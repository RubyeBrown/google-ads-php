<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/adx_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\AdxErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible adx errors.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.AdxErrorEnum.AdxError</code>
 */
class AdxError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Attempt to use non-AdX feature by AdX customer.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_FEATURE = 2;</code>
     */
    const UNSUPPORTED_FEATURE = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNSUPPORTED_FEATURE => 'UNSUPPORTED_FEATURE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdxError::class, \Google\Ads\GoogleAds\V12\Errors\AdxErrorEnum_AdxError::class);
