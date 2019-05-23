# RefundDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | String representing the object’s type. Objects of the same type share the same value. Value is &#x60;refund&#x60; | [optional] 
**id** | **string** | Unique identifier for the object. | [optional] 
**reference** | **string** | Unique reference you provided. | [optional] 
**charge_id** | **string** | ID of the charge that was refunded. | [optional] 
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 pesewas to refund 1.00GHS) representing how much was refunded. | 
**currency** | **string** | Three-letter ISO currency code. e.g. &#x60;GHS&#x60; | [optional] 
**description** | **string** | An arbitrary string attached to the refund. Mainly useful for displaying to customers e.g. in email notifications. | [optional] 
**metadata** | **map[string,string]** | Hash of key-value pairs attached to the refund. | [optional] 
**failure_message** | **string** | Detailed failure message if the state of the refund is &#x60;Failed&#x60;. Can be displayed to the user. | [optional] 
**livemode** | **bool** | &#x60;true&#x60; if the object exists in live mode or &#x60;false&#x60; if the object exists in test mode. | 
**created_at** | [**\DateTime**](\DateTime.md) | Time at which the object was created. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


