<?php
/**
 * Type
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
 * Type Class Doc Comment
 *
 * @category Class
 * @description The transaction type.
 * @package  ClearentTransactionsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Type
{
    /**
     * Possible values of this enum
     */
    public const AUTH = 'AUTH';

    public const CAPTURE = 'CAPTURE';

    public const CARD_INQUIRY = 'CARD INQUIRY';

    public const FORCED_SALE = 'FORCED SALE';

    public const REFUND = 'REFUND';

    public const SALE = 'SALE';

    public const VOID = 'VOID';

    public const UNMATCHED_REFUND = 'UNMATCHED REFUND';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTH,
            self::CAPTURE,
            self::CARD_INQUIRY,
            self::FORCED_SALE,
            self::REFUND,
            self::SALE,
            self::VOID,
            self::UNMATCHED_REFUND
        ];
    }
}


