# UpdateChargeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | **string** | The ID of an existing customer that will be associated with this request. This field may only be updated if there is no existing associated customer with this charge. If already associated, the request will fail. | [optional] 
**description** | **string** | An arbitrary string attached to the charge. Displayed in the dashboard and to customers e.g. in receipts and invoices. | [optional] 
**metadata** | **map[string,string]** | Hash of key-value pairs that you can attach to an object. This is useful for storing additional information about the object in a structured format. Ideal for storing correlating information such as your internal &#x60;Order Number&#x60; or for tracking actions, such as detailing refunds and reasons. e.g. &#x60;{\&quot;order_id\&quot;: \&quot;order12345\&quot;, \&quot;refunded\&quot;: \&quot;Full amount\&quot;, \&quot;refund_reason\&quot;: \&quot;out of stock\&quot;}&#x60; Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty hash. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


