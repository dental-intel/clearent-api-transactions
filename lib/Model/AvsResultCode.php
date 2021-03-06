<?php
/**
 * AvsResultCode
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
 * AvsResultCode Class Doc Comment
 *
 * @category Class
 * @description The result code for the AVS Match.
 * @package  ClearentTransactionsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AvsResultCode
{
    /**
     * Possible values of this enum
     */
    public const N = 'N';

    public const Y = 'Y';

    public const A = 'A';

    public const G = 'G';

    public const R = 'R';

    public const S = 'S';

    public const U = 'U';

    public const W = 'W';

    public const X = 'X';

    public const Z = 'Z';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::N,
            self::Y,
            self::A,
            self::G,
            self::R,
            self::S,
            self::U,
            self::W,
            self::X,
            self::Z
        ];
    }
}


