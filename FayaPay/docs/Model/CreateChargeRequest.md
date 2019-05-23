# CreateChargeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Your unique reference. If a charge already exists with this reference, the request will fail with 409 status code and ErrorCode will be set to &#x60;duplicate_reference&#x60;. For better resiliency, set the &#x60;X-IDEMPOTENCY-KEY&#x60; header to this as well. | 
**source** | **string** | The ID of the source to charge. If the source is not attached to a customer, it is consumed. | [optional] 
**customer** | **string** | The ID of the customer to charge. If &#x60;Source&#x60; is not specified, the default customer source is charged. If an unattached source is specified, this will only associate the customer with the charge however, the source is still consumed. | [optional] 
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 pesewas to charge 1.00GHS) representing how much to charge. The minimum amount is &#x60;100 (1.00GHS)&#x60;. | 
**currency** | **string** | Three-letter ISO currency code, in uppercase. Must be a supported currency. Supported currencies: &#x60;GHS&#x60;. | 
**statement_descriptor** | **string** | Extra information about the charge. This will appear on the customer’s statement. Maximum length: 22 characters. | [optional] 
**description** | **string** | An arbitrary string attached to the charge. Displayed in the dashboard and to customers e.g. in receipts and invoices. | [optional] 
**metadata** | **map[string,string]** | Hash of key-value pairs that you can attach to an object. This is useful for storing additional information about the object in a structured format. Ideal for storing correlating information such as your internal &#x60;Order Number&#x60; or for tracking actions, such as detailing refunds and reasons. e.g. &#x60;{\&quot;order_id\&quot;: \&quot;order12345\&quot;, \&quot;refunded\&quot;: \&quot;Full amount\&quot;, \&quot;refund_reason\&quot;: \&quot;out of stock\&quot;}&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


