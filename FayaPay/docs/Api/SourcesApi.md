# FayaPay\SourcesApi

All URIs are relative to *https://api.fayapay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchSource**](SourcesApi.md#fetchSource) | **GET** /v1/Sources/{SourceId} | Fetch a Source


# **fetchSource**
> \FayaPay\Model\SourceDTO fetchSource($source_id)

Fetch a Source

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_id = "source_id_example"; // string | The id of the source

try {
    $result = $apiInstance->fetchSource($source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->fetchSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| The id of the source |

### Return type

[**\FayaPay\Model\SourceDTO**](../Model/SourceDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

