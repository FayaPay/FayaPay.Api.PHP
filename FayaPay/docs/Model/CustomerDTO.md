# CustomerDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | String representing the object’s type. Objects of the same type share the same value. Value is &#x60;customer&#x60; | [optional] 
**id** | **string** | Unique identifier for the object. | [optional] 
**name** | **string** | The fullname of the customer | [optional] 
**email** | **string** | The email of the customer. | [optional] 
**phone** | **string** | The phone number of the customer. | [optional] 
**description** | **string** | An arbitrary string attached to the customer. | [optional] 
**metadata** | **map[string,string]** | Hash of key-value pairs attached to the object. | [optional] 
**livemode** | **bool** | &#x60;true&#x60; if the object exists in live mode or &#x60;false&#x60; if the object exists in test mode. | 
**created_at** | [**\DateTime**](\DateTime.md) | Time at which the object was created. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


