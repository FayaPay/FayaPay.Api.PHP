<?php
/**
 * RefundFailureCodeValue
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
 * RefundFailureCodeValue Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FayaPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundFailureCodeValue
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const GATEWAY_ERROR = 'GatewayError';
    const UNABLE_TO_PROCESS = 'UnableToProcess';
    const CLAIM_TOKEN_EXPIRED = 'ClaimTokenExpired';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::GATEWAY_ERROR,
            self::UNABLE_TO_PROCESS,
            self::CLAIM_TOKEN_EXPIRED,
        ];
    }
}


