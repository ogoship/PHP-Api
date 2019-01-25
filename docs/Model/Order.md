# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Reference number of order | 
**shippingCode** | **string** | Code of shipping method which you have enabled at Edit Merchant page. This is required if more than 1 shipping method is selected. | [optional] 
**pickUpPointCode** | **string** | Code of pickup point. | [optional] 
**status** | **object** | Status of order | 
**orderLines** | [**\OGOship\Models\OrderLine[]**](OrderLine.md) | Required for new order. If given when updating order then all order lines will be replaced with the ones sent with update. | [optional] 
**customer** | [**\OGOship\Models\Customer**](Customer.md) |  | 
**comments** | **string** | Write any additional comments about order. | [optional] 
**documents** | [**\OGOship\Models\Document[]**](Document.md) | If given when updating order then all documents will be replaced with the ones sent with update. | [optional] 
**priceTotal** | **float** |  | [optional] 
**priceCurrency** | **string** | Currency of price. (ISO 4217 Code). | [optional] 
**cashOnDelivery** | **object** | Required for cash on delivery orders. | [optional] 
**test** | **bool** | Set to true for testing purposes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


