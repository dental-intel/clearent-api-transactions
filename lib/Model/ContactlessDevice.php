<?php
/**
 * ContactlessDevice
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ClearentTransactionsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Clearent Transactions API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ClearentTransactionsApi\Model;
use \ClearentTransactionsApi\ObjectSerializer;

/**
 * ContactlessDevice Class Doc Comment
 *
 * @category Class
 * @description The device used for the contactless transaction.
 * @package  ClearentTransactionsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactlessDevice
{
    /**
     * Possible values of this enum
     */
    public const CARD = 'CARD';

    public const PHONE = 'PHONE';

    public const MOBILE_TAG = 'MOBILE_TAG';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CARD,
            self::PHONE,
            self::MOBILE_TAG
        ];
    }
}


