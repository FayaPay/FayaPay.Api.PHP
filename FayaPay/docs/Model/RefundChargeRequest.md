# RefundChargeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Your unique reference. If a refund already exists with this reference, the request will fail with 409 status code and ErrorCode will be set to &#x60;duplicate_reference&#x60;. For better resiliency, set the &#x60;X-IDEMPOTENCY-KEY&#x60; header to this as well. | 
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 pesewas to charge 1.00GHS) representing how much to refund. The minimum amount is &#x60;100 (1.00GHS)&#x60;. Omit to issue a full refund. Must not exceed the original charge amount. | [optional] 
**description** | **string** | An arbitrary string attached to the refund. Displayed in the dashboard and to customers e.g. in receipts and invoices. | [optional] 
**metadata** | **map[string,string]** | Hash of key-value pairs that you can attach to an object. This is useful for storing additional information about the object in a structured format. Ideal for storing correlating information such as your internal &#x60;Order Number&#x60; or for tracking actions, such as detailing refunds and reasons. e.g. &#x60;{\&quot;order_id\&quot;: \&quot;order12345\&quot;, \&quot;refunded\&quot;: \&quot;Full amount\&quot;, \&quot;refund_reason\&quot;: \&quot;out of stock\&quot;}&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


