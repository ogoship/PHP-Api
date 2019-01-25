# OGOship\StockApi

All URIs are relative to *https://api.ogoship.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stockGet**](StockApi.md#stockGet) | **GET** /api/v1/Stock | 


# **stockGet**
> \OGOship\Models\StockResponse[] stockGet($productCode, $modifiedAfter, $limit, $page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT token
$config = OGOship\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OGOship\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productCode = "productCode_example"; // string | 
$modifiedAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$limit = 50; // int | 
$page = 1; // int | 

try {
    $result = $apiInstance->stockGet($productCode, $modifiedAfter, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockApi->stockGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**|  | [optional]
 **modifiedAfter** | **\DateTime**|  | [optional]
 **limit** | **int**|  | [optional] [default to 50]
 **page** | **int**|  | [optional] [default to 1]

### Return type

[**\OGOship\Models\StockResponse[]**](../Model/StockResponse.md)

### Authorization

[JWT token](../../README.md#JWT token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

