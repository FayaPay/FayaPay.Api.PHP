# DisbursementDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | String representing the object’s type. Objects of the same type share the same value. Value is &#x60;disbursement&#x60; | [optional] 
**id** | **string** | Unique identifier for the object. | [optional] 
**reference** | **string** | Unique reference you provided. | [optional] 
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 pesewas to disburse 1.00GHS) representing how much was disbursed. | 
**fee** | **int** | A positive integer in the smallest currency unit (e.g. 100 pesewas to charge 1.00GHS) representing how much was charged as fees. | 
**currency** | **string** | Three-letter ISO currency code. e.g. &#x60;GHS&#x60; | [optional] 
**recipient_name** | **string** | The recipient&#39;s name. | [optional] 
**recipient_email** | **string** | The recipient&#39;s email address. Used for sending notifications. | [optional] 
**recipient_account_provider** | **string** | The recipient&#39;s account provider. | [optional] 
**recipient_account_number** | **string** | The recipient&#39;s account number. | [optional] 
**recipient_account_country** | **string** | The country in which the recipient&#39;s account is domiciled. | [optional] 
**statement_descriptor** | **string** | Extra information about the disbursement. This appears on your customer’s statement. | [optional] 
**description** | **string** | An arbitrary string attached to the disbursement. Mainly useful for displaying to customers e.g. in receipts and invoices. | [optional] 
**paid** | **bool** | &#x60;true&#x60; if the disbursement succeeded. | 
**metadata** | **map[string,string]** | Hash of key-value pairs attached to the object. | [optional] 
**receipt_id** | **string** | ID for the receipt sent for this disbursement. This attribute will be null until a receipt has been sent. | [optional] 
**receipt_email** | **string** | This is the email address that the receipt for this disbursement was sent to. This attribute will be null until a receipt has been sent. | [optional] 
**receipt_phone** | **string** | This is the phone number that the receipt for this disbursement was sent to. This attribute will be null until a receipt has been sent. | [optional] 
**failure_message** | **string** | Detailed failure message if the state of the disbursement is &#x60;Failed&#x60;. May not be appropriate to display to the user as it may include information about your account. | [optional] 
**livemode** | **bool** | &#x60;true&#x60; if the object exists in live mode or &#x60;false&#x60; if the object exists in test mode. | 
**created_at** | [**\DateTime**](\DateTime.md) | Time at which the object was created. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


