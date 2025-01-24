# HouseOfTickets\PartnerPlatform\ShipmentsApi

All URIs are relative to *https://market.houseoftickets.nl/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listOrderShipments**](ShipmentsApi.md#listordershipments) | **GET** /supplier-api/v1/orders/{marketOrderId}/shipments | 
[**putOrderShipment**](ShipmentsApi.md#putordershipment) | **PUT** /supplier-api/v1/orders/{marketOrderId}/shipments/{supplierShipmentId} | 

# **listOrderShipments**
> \HouseOfTickets\PartnerPlatform\Model\ShipmentDto[] listOrderShipments($market_order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market_order_id = "market_order_id_example"; // string | 

try {
    $result = $apiInstance->listOrderShipments($market_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->listOrderShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_order_id** | **string**|  |

### Return type

[**\HouseOfTickets\PartnerPlatform\Model\ShipmentDto[]**](../Model/ShipmentDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrderShipment**
> putOrderShipment($market_order_id, $supplier_shipment_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market_order_id = "market_order_id_example"; // string | 
$supplier_shipment_id = "supplier_shipment_id_example"; // string | 
$body = new \HouseOfTickets\PartnerPlatform\Model\PutShipmentRequest(); // \HouseOfTickets\PartnerPlatform\Model\PutShipmentRequest | Input data

try {
    $apiInstance->putOrderShipment($market_order_id, $supplier_shipment_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->putOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_order_id** | **string**|  |
 **supplier_shipment_id** | **string**|  |
 **body** | [**\HouseOfTickets\PartnerPlatform\Model\PutShipmentRequest**](../Model/PutShipmentRequest.md)| Input data | [optional]

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

