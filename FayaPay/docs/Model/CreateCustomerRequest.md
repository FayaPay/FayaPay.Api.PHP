# CreateCustomerRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The Name of the customer. | 
**email** | **string** | An optional email for the customer. Used by FayaPay to send receipts and notifications. | [optional] 
**phone** | **string** | An optional phone number for the customer. Used by FayaPay to send receipts and notifications. If set, phone must be a valid phone number, including the country code e.g. +233200123456 | [optional] 
**description** | **string** | An arbitrary string attached to the customer. Displayed in the dashboard. | [optional] 
**metadata** | **map[string,string]** | Hash of key-value pairs that you can attach to an object. This is useful for storing additional information about the object in a structured format. Ideal for storing additional information such as the customer&#39;s address. e.g. &#x60;{\&quot;city\&quot;: \&quot;Accra\&quot;, \&quot;country\&quot;: \&quot;customer_country\&quot;, \&quot;address_line\&quot;: \&quot;address\&quot;}&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


