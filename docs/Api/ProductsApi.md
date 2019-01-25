# OGOship\ProductsApi

All URIs are relative to *https://api.ogoship.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsGet**](ProductsApi.md#productsGet) | **GET** /api/v1/Products | 
[**productsPost**](ProductsApi.md#productsPost) | **POST** /api/v1/Products | 
[**productsPut**](ProductsApi.md#productsPut) | **PUT** /api/v1/Products/{productCode} | 


# **productsGet**
> \OGOship\Models\ProductResponse[] productsGet($code, $eanCode, $modifiedAfter, $limit, $page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT token
$config = OGOship\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OGOship\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | 
$eanCode = "eanCode_example"; // string | 
$modifiedAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$limit = 50; // int | 
$page = 1; // int | 

try {
    $result = $apiInstance->productsGet($code, $eanCode, $modifiedAfter, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  | [optional]
 **eanCode** | **string**|  | [optional]
 **modifiedAfter** | **\DateTime**|  | [optional]
 **limit** | **int**|  | [optional] [default to 50]
 **page** | **int**|  | [optional] [default to 1]

### Return type

[**\OGOship\Models\ProductResponse[]**](../Model/ProductResponse.md)

### Authorization

[JWT token](../../README.md#JWT token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsPost**
> \OGOship\Models\ProductResponse productsPost($product)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT token
$config = OGOship\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OGOship\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = new \OGOship\Models\Product(); // \OGOship\Models\Product | 

try {
    $result = $apiInstance->productsPost($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\OGOship\Models\Product**](../Model/Product.md)|  |

### Return type

[**\OGOship\Models\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[JWT token](../../README.md#JWT token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsPut**
> \OGOship\Models\ProductResponse productsPut($productCode, $product)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT token
$config = OGOship\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OGOship\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productCode = "productCode_example"; // string | 
$product = new \OGOship\Models\Product(); // \OGOship\Models\Product | 

try {
    $result = $apiInstance->productsPut($productCode, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**|  |
 **product** | [**\OGOship\Models\Product**](../Model/Product.md)|  |

### Return type

[**\OGOship\Models\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[JWT token](../../README.md#JWT token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

