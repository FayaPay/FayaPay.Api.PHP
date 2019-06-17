# PayoutDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | String representing the object’s type. Objects of the same type share the same value. Value is &#x60;payout&#x60; | [optional] 
**id** | **string** | Unique identifier for the object. | [optional] 
**reference** | **string** | A unique reference string | [optional] 
**amount** | **int** | An integer in the smallest currency unit (e.g. 100 pesewas &#x3D; 1.00GHS) representing how much was paid out. | 
**currency** | **string** | Three-letter ISO currency code. e.g. &#x60;GHS&#x60;. | [optional] 
**settlement_account_provider** | **string** | The settlement account provider. e.g. &#x60;GCB&#x60;, &#x60;CBG&#x60;. | [optional] 
**settlement_account_number** | **string** | The settlement account number. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Time at which the object was created. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


