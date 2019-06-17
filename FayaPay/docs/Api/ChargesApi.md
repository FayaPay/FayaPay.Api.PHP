# FayaPay\ChargesApi

All URIs are relative to *https://api.fayapay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCharge**](ChargesApi.md#createCharge) | **POST** /v1/Charges | Create a Charge
[**fetchCharge**](ChargesApi.md#fetchCharge) | **GET** /v1/Charges/{ChargeId} | Fetch a Charge
[**listCharges**](ChargesApi.md#listCharges) | **GET** /v1/Charges | List Charges
[**refundCharge**](ChargesApi.md#refundCharge) | **POST** /v1/Charges/{ChargeId}/Refunds | Refund a charge
[**updateCharge**](ChargesApi.md#updateCharge) | **POST** /v1/Charges/{ChargeId} | Update a Charge


# **createCharge**
> \FayaPay\Model\ChargeDTO createCharge($create_charge_request)

Create a Charge

You can either charge a `Customer` or a `Source`. If `Customer` is specified in addition to `Source`, then the `Source` must either be attached to the customer or unattached.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_charge_request = new \FayaPay\Model\CreateChargeRequest(); // \FayaPay\Model\CreateChargeRequest | The create request

try {
    $result = $apiInstance->createCharge($create_charge_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->createCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_charge_request** | [**\FayaPay\Model\CreateChargeRequest**](../Model/CreateChargeRequest.md)| The create request |

### Return type

[**\FayaPay\Model\ChargeDTO**](../Model/ChargeDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchCharge**
> \FayaPay\Model\ChargeDTO fetchCharge($charge_id)

Fetch a Charge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | The id of the charge

try {
    $result = $apiInstance->fetchCharge($charge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->fetchCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| The id of the charge |

### Return type

[**\FayaPay\Model\ChargeDTO**](../Model/ChargeDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCharges**
> \FayaPay\Model\ListResponseOfChargeDTO listCharges($ending_before, $starting_after, $limit)

List Charges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ending_before = "ending_before_example"; // string | A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore=obj_foo in order to fetch the previous page of the list.
$starting_after = "starting_after_example"; // string | A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter=obj_foo in order to fetch the next page of the list.
$limit = 10; // int | A limit on the number of objects to be returned, between 1 and 50. Defaults to 10.

try {
    $result = $apiInstance->listCharges($ending_before, $starting_after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->listCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ending_before** | **string**| A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. | [optional]
 **starting_after** | **string**| A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. | [optional]
 **limit** | **int**| A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. | [optional] [default to 10]

### Return type

[**\FayaPay\Model\ListResponseOfChargeDTO**](../Model/ListResponseOfChargeDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundCharge**
> \FayaPay\Model\RefundDTO refundCharge($charge_id, $refund_charge_request)

Refund a charge

You can either refund a `Charge` fully or partially. To make a partial refund, pass in an `Amount`. Omit it to issue a full refund. The charge must have been created directly by you. Charges created via other methods e.g. Billing or Orders cannot be refunded using this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | The id of the charge
$refund_charge_request = new \FayaPay\Model\RefundChargeRequest(); // \FayaPay\Model\RefundChargeRequest | The refund request

try {
    $result = $apiInstance->refundCharge($charge_id, $refund_charge_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->refundCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| The id of the charge |
 **refund_charge_request** | [**\FayaPay\Model\RefundChargeRequest**](../Model/RefundChargeRequest.md)| The refund request |

### Return type

[**\FayaPay\Model\RefundDTO**](../Model/RefundDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCharge**
> \FayaPay\Model\ChargeDTO updateCharge($charge_id, $update_charge_request)

Update a Charge

Updating is a patch operation. Only set the keys of the properties you wish to update. Properties with null values are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | The id of the charge
$update_charge_request = new \FayaPay\Model\UpdateChargeRequest(); // \FayaPay\Model\UpdateChargeRequest | The update request

try {
    $result = $apiInstance->updateCharge($charge_id, $update_charge_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->updateCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| The id of the charge |
 **update_charge_request** | [**\FayaPay\Model\UpdateChargeRequest**](../Model/UpdateChargeRequest.md)| The update request |

### Return type

[**\FayaPay\Model\ChargeDTO**](../Model/ChargeDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

