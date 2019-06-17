# SourceDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | String representing the object’s type. Objects of the same type share the same value. Value is &#x60;source&#x60; | [optional] 
**id** | **string** | Unique identifier for the object. | [optional] 
**customer_id** | **string** | ID of the customer this source is attached to. | [optional] 
**masked_name** | **string** | Masked name for this source. Can be displayed publicly. | [optional] 
**currency** | **string** | Three-letter ISO currency code. e.g. &#x60;GHS&#x60; | [optional] 
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 pesewas to charge 1.00GHS) representing how much you intend to charge. | 
**statement_descriptor** | **string** | Extra information about the charge. This appears on your customer’s statement. | [optional] 
**type** | **string** | The type of the source is &#x60;momo&#x60;. | [optional] 
**return_url** | **string** | The url to return your users to after a redirect. | [optional] 
**client_secret** | **string** | When &#x60;Flow&#x60; is &#x60;Redirect&#x60;, when client is being redirected back to your site after source creation,  this will be passed in the query string via the &#x60;fayapay_client_secret&#x60; parameter. You may use this to verify the client. | [optional] 
**metadata** | **map[string,string]** | Hash of key-value pairs attached to the object. | [optional] 
**redirect_url** | **string** | When &#x60;Flow&#x60; is &#x60;Redirect&#x60;, redirect the customer in order to complete source creation | [optional] 
**livemode** | **bool** | &#x60;true&#x60; if the object exists in live mode or &#x60;false&#x60; if the object exists in test mode. | 
**created_at** | [**\DateTime**](\DateTime.md) | Time at which the object was created. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


