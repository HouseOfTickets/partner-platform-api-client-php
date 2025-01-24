# HouseOfTickets\PartnerPlatform\WebhooksApi

All URIs are relative to *https://market.houseoftickets.nl/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhook**](WebhooksApi.md#deletewebhook) | **DELETE** /supplier-api/v1/webhooks/{supplierWebhookId} | 
[**getWebhook**](WebhooksApi.md#getwebhook) | **GET** /supplier-api/v1/webhooks/{supplierWebhookId} | 
[**listWebhooks**](WebhooksApi.md#listwebhooks) | **GET** /supplier-api/v1/webhooks | 
[**putWebhook**](WebhooksApi.md#putwebhook) | **PUT** /supplier-api/v1/webhooks/{supplierWebhookId} | 
[**testWebhook**](WebhooksApi.md#testwebhook) | **POST** /supplier-api/v1/webhooks/{supplierWebhookId}/test | 

# **deleteWebhook**
> deleteWebhook($supplier_webhook_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_webhook_id = "supplier_webhook_id_example"; // string | 

try {
    $apiInstance->deleteWebhook($supplier_webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_webhook_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhook**
> \HouseOfTickets\PartnerPlatform\Model\WebhookDto getWebhook($supplier_webhook_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_webhook_id = "supplier_webhook_id_example"; // string | 

try {
    $result = $apiInstance->getWebhook($supplier_webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_webhook_id** | **string**|  |

### Return type

[**\HouseOfTickets\PartnerPlatform\Model\WebhookDto**](../Model/WebhookDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWebhooks**
> \HouseOfTickets\PartnerPlatform\Model\WebhookList listWebhooks($limit, $offset)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of entities to return
$offset = 0; // int | Skip first N items

try {
    $result = $apiInstance->listWebhooks($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of entities to return | [optional] [default to 100]
 **offset** | **int**| Skip first N items | [optional] [default to 0]

### Return type

[**\HouseOfTickets\PartnerPlatform\Model\WebhookList**](../Model/WebhookList.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putWebhook**
> putWebhook($supplier_webhook_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_webhook_id = "supplier_webhook_id_example"; // string | 
$body = new \HouseOfTickets\PartnerPlatform\Model\PutWebhookRequest(); // \HouseOfTickets\PartnerPlatform\Model\PutWebhookRequest | Input data

try {
    $apiInstance->putWebhook($supplier_webhook_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->putWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_webhook_id** | **string**|  |
 **body** | [**\HouseOfTickets\PartnerPlatform\Model\PutWebhookRequest**](../Model/PutWebhookRequest.md)| Input data | [optional]

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testWebhook**
> testWebhook($supplier_webhook_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = HouseOfTickets\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new HouseOfTickets\PartnerPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier_webhook_id = "supplier_webhook_id_example"; // string | 

try {
    $apiInstance->testWebhook($supplier_webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->testWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_webhook_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

