# com.lodgea\DefaultApi

All URIs are relative to https://api.eu.lodgea.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**availabilitySearchPost()**](DefaultApi.md#availabilitySearchPost) | **POST** /availability/search | Search for availability
[**locationSearchPost()**](DefaultApi.md#locationSearchPost) | **POST** /location/search | Search for location
[**propertiesGet()**](DefaultApi.md#propertiesGet) | **GET** /properties | List (filtered) properties
[**propertiesPropertyIdAvailabilityGet()**](DefaultApi.md#propertiesPropertyIdAvailabilityGet) | **GET** /properties/{propertyId}/availability | Get a properties availability
[**propertiesPropertyIdGet()**](DefaultApi.md#propertiesPropertyIdGet) | **GET** /properties/{propertyId} | Get a properties details


## `availabilitySearchPost()`

```php
availabilitySearchPost($inline_object1): \com.lodgea\com.lodgea.model\InlineResponse2001
```

Search for availability

Get availability information based on search criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new com.lodgea\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object1 = new \com.lodgea\com.lodgea.model\InlineObject1(); // \com.lodgea\com.lodgea.model\InlineObject1

try {
    $result = $apiInstance->availabilitySearchPost($inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->availabilitySearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object1** | [**\com.lodgea\com.lodgea.model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\com.lodgea\com.lodgea.model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationSearchPost()`

```php
locationSearchPost($inline_object): \com.lodgea\com.lodgea.model\InlineResponse200
```

Search for location

Get a list of locations and their lowest available rate related to a given keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new com.lodgea\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = new \com.lodgea\com.lodgea.model\InlineObject(); // \com.lodgea\com.lodgea.model\InlineObject

try {
    $result = $apiInstance->locationSearchPost($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->locationSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\com.lodgea\com.lodgea.model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\com.lodgea\com.lodgea.model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertiesGet()`

```php
propertiesGet($keyword, $page_token): \com.lodgea\com.lodgea.model\InlineResponse2002
```

List (filtered) properties

List properties, optionally filtered by a keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new com.lodgea\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword = Strandresidenz Sylt; // string
$page_token = eyJ0ZW5hbnRDb2RlIjoiZG1vLWRlbW8iLCJuYW1lIjoiTGFuZGhhdXMgVHJlc2tlcnNhbmQiLCJwcm9wZXJ0eUlkIjoibGFuZGhhdXMtdHJlc2tlcnNhbmQifQ==; // string

try {
    $result = $apiInstance->propertiesGet($keyword, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->propertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword** | **string**|  | [optional]
 **page_token** | **string**|  | [optional]

### Return type

[**\com.lodgea\com.lodgea.model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertiesPropertyIdAvailabilityGet()`

```php
propertiesPropertyIdAvailabilityGet($property_id, $currency_code): \com.lodgea\com.lodgea.model\InlineResponse2004
```

Get a properties availability

Get detailed availability information for a specific property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new com.lodgea\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = strandresidenz-sylt; // string
$currency_code = EUR; // string

try {
    $result = $apiInstance->propertiesPropertyIdAvailabilityGet($property_id, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->propertiesPropertyIdAvailabilityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **string**|  |
 **currency_code** | **string**|  |

### Return type

[**\com.lodgea\com.lodgea.model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertiesPropertyIdGet()`

```php
propertiesPropertyIdGet($property_id): \com.lodgea\com.lodgea.model\InlineResponse2003
```

Get a properties details

Get all information about a specific property by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new com.lodgea\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = strandresidenz-sylt; // string

try {
    $result = $apiInstance->propertiesPropertyIdGet($property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->propertiesPropertyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **string**|  |

### Return type

[**\com.lodgea\com.lodgea.model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
