# ChargeDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | String representing the object’s type. Objects of the same type share the same value. Value is &#x60;charge&#x60; | [optional] 
**id** | **string** | Unique identifier for the object. | [optional] 
**reference** | **string** | Unique reference you provided. | [optional] 
**source_id** | **string** | ID of the source that was charged. | [optional] 
**customer_id** | **string** | ID of the customer this charge belongs to if one exists. | [optional] 
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 pesewas to charge 1.00GHS) representing how much was charged. | 
**amount_refunded** | **int** | An integer in the smallest currency unit (e.g. 100 pesewas equals 1.00GHS) representing how much of the charge was refunded. This can be less than Amount if the refund was partial. | 
**fee** | **int** | A positive integer in the smallest currency unit (e.g. 100 pesewas to charge 1.00GHS) representing how much was charged as fees. | 
**currency** | **string** | Three-letter ISO currency code. e.g. &#x60;GHS&#x60; | [optional] 
**statement_descriptor** | **string** | Extra information about the charge. This appears on your customer’s statement. | [optional] 
**description** | **string** | An arbitrary string attached to the charge. Mainly useful for displaying to customers e.g. in receipts and invoices. | [optional] 
**paid** | **bool** | &#x60;true&#x60; if the charge succeeded, or was successfully authorized for later capture. | 
**metadata** | **map[string,string]** | Hash of key-value pairs attached to the object. | [optional] 
**receipt_id** | **string** | ID for the receipt sent for this charge. This attribute will be null until a receipt has been sent. | [optional] 
**receipt_email** | **string** | This is the email address that the receipt for this charge was sent to. This attribute will be null until a receipt has been sent. | [optional] 
**receipt_phone** | **string** | This is the phone number that the receipt for this charge was sent to. This attribute will be null until a receipt has been sent. | [optional] 
**failure_message** | **string** | Detailed failure message if the state of the charge is &#x60;Failed&#x60;. Can be displayed to the user. | [optional] 
**livemode** | **bool** | &#x60;true&#x60; if the object exists in live mode or &#x60;false&#x60; if the object exists in test mode. | 
**created_at** | [**\DateTime**](\DateTime.md) | Time at which the object was created. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


