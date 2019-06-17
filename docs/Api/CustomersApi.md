# FayaPay\CustomersApi

All URIs are relative to *https://api.fayapay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachSource**](CustomersApi.md#attachSource) | **POST** /v1/Customers/{CustomerId}/Sources | Attach a source to a customer
[**createCustomer**](CustomersApi.md#createCustomer) | **POST** /v1/Customers | Create a Customer
[**fetchCustomer**](CustomersApi.md#fetchCustomer) | **GET** /v1/Customers/{Id} | Fetch a Customer
[**listCustomers**](CustomersApi.md#listCustomers) | **GET** /v1/Customers | List Customers
[**updateCustomer**](CustomersApi.md#updateCustomer) | **POST** /v1/Customers/{CustomerId} | Update a Customer


# **attachSource**
> \FayaPay\Model\SourceDTO attachSource($customer_id, $attach_source_request)

Attach a source to a customer

The source must be unattached, reuseable, chargeable (or pending) and not expired. Attaching a source does not affect the customer's default source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer
$attach_source_request = new \FayaPay\Model\AttachSourceRequest(); // \FayaPay\Model\AttachSourceRequest | The attach request

try {
    $result = $apiInstance->attachSource($customer_id, $attach_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->attachSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer |
 **attach_source_request** | [**\FayaPay\Model\AttachSourceRequest**](../Model/AttachSourceRequest.md)| The attach request |

### Return type

[**\FayaPay\Model\SourceDTO**](../Model/SourceDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json, application/xml, text/xml, application/_*+xml
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomer**
> \FayaPay\Model\CustomerDTO createCustomer($create_customer_request)

Create a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_customer_request = new \FayaPay\Model\CreateCustomerRequest(); // \FayaPay\Model\CreateCustomerRequest | The create request

try {
    $result = $apiInstance->createCustomer($create_customer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_customer_request** | [**\FayaPay\Model\CreateCustomerRequest**](../Model/CreateCustomerRequest.md)| The create request |

### Return type

[**\FayaPay\Model\CustomerDTO**](../Model/CustomerDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchCustomer**
> \FayaPay\Model\CustomerDTO fetchCustomer($id)

Fetch a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the customer

try {
    $result = $apiInstance->fetchCustomer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->fetchCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the customer |

### Return type

[**\FayaPay\Model\CustomerDTO**](../Model/CustomerDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomers**
> \FayaPay\Model\ListResponseOfCustomerDTO listCustomers($ending_before, $starting_after, $limit)

List Customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ending_before = "ending_before_example"; // string | A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore=obj_foo in order to fetch the previous page of the list.
$starting_after = "starting_after_example"; // string | A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter=obj_foo in order to fetch the next page of the list.
$limit = 10; // int | A limit on the number of objects to be returned, between 1 and 50. Defaults to 10.

try {
    $result = $apiInstance->listCustomers($ending_before, $starting_after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomers: ', $e->getMessage(), PHP_EOL;
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

[**\FayaPay\Model\ListResponseOfCustomerDTO**](../Model/ListResponseOfCustomerDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \FayaPay\Model\CustomerDTO updateCustomer($customer_id, $update_customer_request)

Update a Customer

Updating is a patch operation. Only set the keys of the properties you wish to update. Properties with null values are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = FayaPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FayaPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new FayaPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer
$update_customer_request = new \FayaPay\Model\UpdateCustomerRequest(); // \FayaPay\Model\UpdateCustomerRequest | The update request

try {
    $result = $apiInstance->updateCustomer($customer_id, $update_customer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer |
 **update_customer_request** | [**\FayaPay\Model\UpdateCustomerRequest**](../Model/UpdateCustomerRequest.md)| The update request |

### Return type

[**\FayaPay\Model\CustomerDTO**](../Model/CustomerDTO.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

