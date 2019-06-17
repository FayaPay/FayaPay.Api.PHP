# FayaPay\PayoutsApi

All URIs are relative to *https://api.fayapay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchPayout**](PayoutsApi.md#fetchPayout) | **GET** /v1/Payouts/{Id} | Fetch a Payout
[**listPayouts**](PayoutsApi.md#listPayouts) | **GET** /v1/Payouts | List Payouts


# **fetchPayout**
> \FayaPay\Model\PayoutDTO fetchPayout($id)

Fetch a Payout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the payout

try {
    $result = $apiInstance->fetchPayout($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->fetchPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the payout |

### Return type

[**\FayaPay\Model\PayoutDTO**](../Model/PayoutDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPayouts**
> \FayaPay\Model\ListResponseOfPayoutDTO listPayouts($ending_before, $starting_after, $limit)

List Payouts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ending_before = "ending_before_example"; // string | A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore=obj_foo in order to fetch the previous page of the list.
$starting_after = "starting_after_example"; // string | A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter=obj_foo in order to fetch the next page of the list.
$limit = 10; // int | A limit on the number of objects to be returned, between 1 and 50. Defaults to 10.

try {
    $result = $apiInstance->listPayouts($ending_before, $starting_after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->listPayouts: ', $e->getMessage(), PHP_EOL;
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

[**\FayaPay\Model\ListResponseOfPayoutDTO**](../Model/ListResponseOfPayoutDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

