<?php
/**
 * SourceStateValue
 *
 * PHP version 5
 *
 * @category Class
 * @package  FayaPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FayaPay API
 *
 * API Reference for FayaPay
 *
 * OpenAPI spec version: 1
 * Contact: support@fayapay.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FayaPay\Model;
use \FayaPay\ObjectSerializer;

/**
 * SourceStateValue Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FayaPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SourceStateValue
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'Pending';
    const CHARGEABLE = 'Chargeable';
    const CONSUMED = 'Consumed';
    const CANCELED = 'Canceled';
    const FAILED = 'Failed';
    const EXPIRED = 'Expired';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::CHARGEABLE,
            self::CONSUMED,
            self::CANCELED,
            self::FAILED,
            self::EXPIRED,
        ];
    }
}


