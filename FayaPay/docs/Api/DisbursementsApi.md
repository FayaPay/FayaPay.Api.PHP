# FayaPay\DisbursementsApi

All URIs are relative to *https://api.fayapay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDisbursement**](DisbursementsApi.md#createDisbursement) | **POST** /v1/Disbursements | Create a Disbursement
[**fetchDisbursement**](DisbursementsApi.md#fetchDisbursement) | **GET** /v1/Disbursements/{DisbursementId} | Fetch a Disbursement
[**listDisbursements**](DisbursementsApi.md#listDisbursements) | **GET** /v1/Disbursements | List Disbursements
[**updateDisbursement**](DisbursementsApi.md#updateDisbursement) | **POST** /v1/Disbursements/{DisbursementId} | Update a Disbursement


# **createDisbursement**
> \FayaPay\Model\DisbursementDTO createDisbursement($create_disbursement_request)

Create a Disbursement

You can either disbursement a `Customer` or a `Source`. If `Customer` is specified in addition to `Source`, then the `Source` must either be attached to the customer or unattached.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_disbursement_request = new \FayaPay\Model\CreateDisbursementRequest(); // \FayaPay\Model\CreateDisbursementRequest | The create request

try {
    $result = $apiInstance->createDisbursement($create_disbursement_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->createDisbursement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_disbursement_request** | [**\FayaPay\Model\CreateDisbursementRequest**](../Model/CreateDisbursementRequest.md)| The create request |

### Return type

[**\FayaPay\Model\DisbursementDTO**](../Model/DisbursementDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchDisbursement**
> \FayaPay\Model\DisbursementDTO fetchDisbursement($disbursement_id)

Fetch a Disbursement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$disbursement_id = "disbursement_id_example"; // string | The id of the disbursement

try {
    $result = $apiInstance->fetchDisbursement($disbursement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->fetchDisbursement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disbursement_id** | **string**| The id of the disbursement |

### Return type

[**\FayaPay\Model\DisbursementDTO**](../Model/DisbursementDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDisbursements**
> \FayaPay\Model\ListResponseOfDisbursementDTO listDisbursements($ending_before, $starting_after, $limit)

List Disbursements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ending_before = "ending_before_example"; // string | A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore=obj_foo in order to fetch the previous page of the list.
$starting_after = "starting_after_example"; // string | A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter=obj_foo in order to fetch the next page of the list.
$limit = 10; // int | A limit on the number of objects to be returned, between 1 and 50. Defaults to 10.

try {
    $result = $apiInstance->listDisbursements($ending_before, $starting_after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->listDisbursements: ', $e->getMessage(), PHP_EOL;
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

[**\FayaPay\Model\ListResponseOfDisbursementDTO**](../Model/ListResponseOfDisbursementDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDisbursement**
> \FayaPay\Model\DisbursementDTO updateDisbursement($disbursement_id, $update_disbursement_request)

Update a Disbursement

Updating is a patch operation. Only set the keys of the properties you wish to update. Properties with null values are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$disbursement_id = "disbursement_id_example"; // string | The id of the disbursement
$update_disbursement_request = new \FayaPay\Model\UpdateDisbursementRequest(); // \FayaPay\Model\UpdateDisbursementRequest | The update request

try {
    $result = $apiInstance->updateDisbursement($disbursement_id, $update_disbursement_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->updateDisbursement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disbursement_id** | **string**| The id of the disbursement |
 **update_disbursement_request** | [**\FayaPay\Model\UpdateDisbursementRequest**](../Model/UpdateDisbursementRequest.md)| The update request |

### Return type

[**\FayaPay\Model\DisbursementDTO**](../Model/DisbursementDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

