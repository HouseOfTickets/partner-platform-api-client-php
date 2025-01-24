# HouseOfTickets\PartnerPlatform\ProductsApi

All URIs are relative to *https://market.houseoftickets.nl/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOffer**](ProductsApi.md#getoffer) | **GET** /supplier-api/v1/products/{supplierProductId}/offer | Get current offer for a product
[**getProduct**](ProductsApi.md#getproduct) | **GET** /supplier-api/v1/products/{supplierProductId} | Get product
[**listProducts**](ProductsApi.md#listproducts) | **GET** /supplier-api/v1/products | List products
[**putOffer**](ProductsApi.md#putoffer) | **PUT** /supplier-api/v1/products/{supplierProductId}/offer | Create or update an offer on a product
[**putProduct**](ProductsApi.md#putproduct) | **PUT** /supplier-api/v1/products/{supplierProductId} | Create or update product
[**stopOffer**](ProductsApi.md#stopoffer) | **POST** /supplier-api/v1/products/{supplierProductId}/offer/stop | Stop current offer for a product

# **getOffer**
> \HouseOfTickets\PartnerPlatform\Model\ProductOfferResponseDto getOffer($supplier_product_id)

Get current offer for a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_product_id = "supplier_product_id_example"; // string | 

try {
    $result = $apiInstance->getOffer($supplier_product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_product_id** | **string**|  |

### Return type

[**\HouseOfTickets\PartnerPlatform\Model\ProductOfferResponseDto**](../Model/ProductOfferResponseDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProduct**
> \HouseOfTickets\PartnerPlatform\Model\ProductDto getProduct($supplier_product_id)

Get product

Get previously created product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_product_id = "supplier_product_id_example"; // string | 

try {
    $result = $apiInstance->getProduct($supplier_product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_product_id** | **string**|  |

### Return type

[**\HouseOfTickets\PartnerPlatform\Model\ProductDto**](../Model/ProductDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProducts**
> \HouseOfTickets\PartnerPlatform\Model\ProductList listProducts($limit, $offset)

List products

List previously created products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Maximum number of entities to return
$offset = 0; // int | Skip first N items

try {
    $result = $apiInstance->listProducts($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of entities to return | [optional] [default to 1000]
 **offset** | **int**| Skip first N items | [optional] [default to 0]

### Return type

[**\HouseOfTickets\PartnerPlatform\Model\ProductList**](../Model/ProductList.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOffer**
> putOffer($supplier_product_id, $body)

Create or update an offer on a product

<div>If an offer for this product already exists, it is updated.<br><br/>OfferAmount is the maximum cumulative number of orders that a supplier can receive for this product. Currently approved cumulative offer amount is located in the nested meta object together with the amount of shipped and reserved items.<br><br/> Example:<br><br/><ul><li>A new offer is created with offerAmount = 10</li><li>5 items are sold, 3 of which are shipped and 2 are reserved. It means the offerAmount value cannot go below 5 anymore.</li><li>To increase the offerAmount by 5, you take the old offerAmount (10) and add the increase value (5) = 15.</li><li>The increase should first go through the approval process.</li><li>No approval needed for decrease, but it should not be lower than shipped + reserved</li></ul></div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_product_id = "supplier_product_id_example"; // string | 
$body = new \HouseOfTickets\PartnerPlatform\Model\ProductOfferRequest(); // \HouseOfTickets\PartnerPlatform\Model\ProductOfferRequest | Input data

try {
    $apiInstance->putOffer($supplier_product_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->putOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_product_id** | **string**|  |
 **body** | [**\HouseOfTickets\PartnerPlatform\Model\ProductOfferRequest**](../Model/ProductOfferRequest.md)| Input data | [optional]

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProduct**
> putProduct($supplier_product_id, $body)

Create or update product

If a product with the same Supplier Product ID already exists, it is updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_product_id = "supplier_product_id_example"; // string | 
$body = new \HouseOfTickets\PartnerPlatform\Model\PutProductRequest(); // \HouseOfTickets\PartnerPlatform\Model\PutProductRequest | Input data

try {
    $apiInstance->putProduct($supplier_product_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->putProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_product_id** | **string**|  |
 **body** | [**\HouseOfTickets\PartnerPlatform\Model\PutProductRequest**](../Model/PutProductRequest.md)| Input data | [optional]

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopOffer**
> stopOffer($supplier_product_id, $body)

Stop current offer for a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_product_id = "supplier_product_id_example"; // string | 
$body = new \HouseOfTickets\PartnerPlatform\Model\StopSupplierProductOfferRequest(); // \HouseOfTickets\PartnerPlatform\Model\StopSupplierProductOfferRequest | Input data

try {
    $apiInstance->stopOffer($supplier_product_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->stopOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_product_id** | **string**|  |
 **body** | [**\HouseOfTickets\PartnerPlatform\Model\StopSupplierProductOfferRequest**](../Model/StopSupplierProductOfferRequest.md)| Input data | [optional]

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

