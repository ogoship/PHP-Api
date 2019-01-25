# OGOship\OrdersApi

All URIs are relative to *https://api.ogoship.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersGet**](OrdersApi.md#ordersGet) | **GET** /api/v1/Orders | 
[**ordersPost**](OrdersApi.md#ordersPost) | **POST** /api/v1/Orders | 
[**ordersPut**](OrdersApi.md#ordersPut) | **PUT** /api/v1/Orders/{reference} | 


# **ordersGet**
> \OGOship\Models\OrderResponse[] ordersGet($reference, $modifiedAfter, $limit, $page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT token
$config = OGOship\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OGOship\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = "reference_example"; // string | 
$modifiedAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$limit = 50; // int | 
$page = 1; // int | 

try {
    $result = $apiInstance->ordersGet($reference, $modifiedAfter, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**|  | [optional]
 **modifiedAfter** | **\DateTime**|  | [optional]
 **limit** | **int**|  | [optional] [default to 50]
 **page** | **int**|  | [optional] [default to 1]

### Return type

[**\OGOship\Models\OrderResponse[]**](../Model/OrderResponse.md)

### Authorization

[JWT token](../../README.md#JWT token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPost**
> \OGOship\Models\OrderResponse ordersPost($order)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT token
$config = OGOship\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OGOship\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \OGOship\Models\Order(); // \OGOship\Models\Order | 

try {
    $result = $apiInstance->ordersPost($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\OGOship\Models\Order**](../Model/Order.md)|  |

### Return type

[**\OGOship\Models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[JWT token](../../README.md#JWT token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPut**
> \OGOship\Models\OrderResponse ordersPut($reference, $order)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: JWT token
$config = OGOship\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OGOship\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = "reference_example"; // string | 
$order = new \OGOship\Models\Order(); // \OGOship\Models\Order | 

try {
    $result = $apiInstance->ordersPut($reference, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**|  |
 **order** | [**\OGOship\Models\Order**](../Model/Order.md)|  |

### Return type

[**\OGOship\Models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[JWT token](../../README.md#JWT token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

