<?php

/**
 * Intent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sezzle API
 *
 * The Sezzle API is intended for merchants interested in accepting Sezzle Pay as a payment option.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Sezzle;

/**
 * Intent Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Intent
{
    /**
     * Possible values of this enum
     */
    public const AUTH = 'AUTH';

    public const CAPTURE = 'CAPTURE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::AUTH,
            self::CAPTURE,
        ];
    }
}
