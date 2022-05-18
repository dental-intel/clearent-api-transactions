<?php
/**
 * MerchantLegacyToken
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ClearentTransactionsApi\Model;
use \ClearentTransactionsApi\ObjectSerializer;

/**
 * MerchantLegacyToken Class Doc Comment
 *
 * @category Class
 * @description True if you would like to use a legacy token in your transaction request. Optional on an AUTH or SALE.
 * @package  ClearentTransactionsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MerchantLegacyToken
{
    /**
     * Possible values of this enum
     */
    const TRUE = 'true';

    const FALSE = 'false';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TRUE,
            self::FALSE
        ];
    }
}


