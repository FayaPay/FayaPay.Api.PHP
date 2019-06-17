<?php
/**
 * DisbursementStateValue
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
 * FayaPay API
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
 * DisbursementStateValue Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FayaPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisbursementStateValue
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'Pending';
    const SUCCEEDED = 'Succeeded';
    const FAILED = 'Failed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::SUCCEEDED,
            self::FAILED,
        ];
    }
}


