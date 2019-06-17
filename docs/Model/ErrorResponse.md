# ErrorResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | String representing the object’s type. Objects of the same type share the same value. Value is &#x60;error&#x60; | [optional] 
**code** | **string** | The error code &#x60;general_error&#x60;: non-specific error &#x60;authentication_error&#x60;: failed to authenticate your request. invalid or missing api key &#x60;authorization_error&#x60;: failed to authorize your request. missing permission or failed kyc check &#x60;validation_error&#x60;: an error occurred while validating your request &#x60;livemode_mismatch&#x60;: an object is being accessed with an api key of a different livemode &#x60;duplicate_reference&#x60;: supplied reference has already been used &#x60;idempotency_error&#x60;: supplied idempotency key has already been used with a different request &#x60;source_expired&#x60;: specified source has expired &#x60;currency_mismatch&#x60;: specified currency does not match source currency &#x60;amount_mismatch&#x60;: specified amount does not match source amount | [optional] 
**messages** | **string[]** | List of error messages | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


