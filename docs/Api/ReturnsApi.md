# HouseOfTickets\PartnerPlatform\ReturnsApi

All URIs are relative to *https://market.houseoftickets.nl/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReturnAnnouncement**](ReturnsApi.md#getreturnannouncement) | **GET** /supplier-api/v1/return-announcements/{marketRmaId} | Get return announcement
[**listReturnAnnouncements**](ReturnsApi.md#listreturnannouncements) | **GET** /supplier-api/v1/return-announcements | List of returns announcements
[**listReturns**](ReturnsApi.md#listreturns) | **GET** /supplier-api/v1/orders/{marketOrderId}/returns | 
[**putReturn**](ReturnsApi.md#putreturn) | **PUT** /supplier-api/v1/orders/{marketOrderId}/returns/{supplierReturnId} | 

# **getReturnAnnouncement**
> \HouseOfTickets\PartnerPlatform\Model\ReturnAnnouncementDto getReturnAnnouncement($market_rma_id)

Get return announcement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market_rma_id = "market_rma_id_example"; // string | 

try {
    $result = $apiInstance->getReturnAnnouncement($market_rma_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturnAnnouncement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_rma_id** | **string**|  |

### Return type

[**\HouseOfTickets\PartnerPlatform\Model\ReturnAnnouncementDto**](../Model/ReturnAnnouncementDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listReturnAnnouncements**
> \HouseOfTickets\PartnerPlatform\Model\ReturnAnnouncementsList listReturnAnnouncements($since, $limit, $offset)

List of returns announcements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$limit = 100; // int | Maximum number of entities to return
$offset = 0; // int | Skip first N items

try {
    $result = $apiInstance->listReturnAnnouncements($since, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->listReturnAnnouncements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since** | **\DateTime**|  | [optional]
 **limit** | **int**| Maximum number of entities to return | [optional] [default to 100]
 **offset** | **int**| Skip first N items | [optional] [default to 0]

### Return type

[**\HouseOfTickets\PartnerPlatform\Model\ReturnAnnouncementsList**](../Model/ReturnAnnouncementsList.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listReturns**
> \HouseOfTickets\PartnerPlatform\Model\ReturnDto[] listReturns($market_order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market_order_id = "market_order_id_example"; // string | 

try {
    $result = $apiInstance->listReturns($market_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->listReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_order_id** | **string**|  |

### Return type

[**\HouseOfTickets\PartnerPlatform\Model\ReturnDto[]**](../Model/ReturnDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putReturn**
> putReturn($market_order_id, $supplier_return_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market_order_id = "market_order_id_example"; // string | 
$supplier_return_id = "supplier_return_id_example"; // string | 
$body = new \HouseOfTickets\PartnerPlatform\Model\PutReturnRequest(); // \HouseOfTickets\PartnerPlatform\Model\PutReturnRequest | Input data

try {
    $apiInstance->putReturn($market_order_id, $supplier_return_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->putReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_order_id** | **string**|  |
 **supplier_return_id** | **string**|  |
 **body** | [**\HouseOfTickets\PartnerPlatform\Model\PutReturnRequest**](../Model/PutReturnRequest.md)| Input data | [optional]

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

