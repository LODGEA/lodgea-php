# com.lodgea\PropertyApi

All URIs are relative to https://api.eu.lodgea.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PropertyGetPost()**](PropertyApi.md#v1PropertyGetPost) | **POST** /v1/property/get | Get Property by ID
[**v1PropertyListPost()**](PropertyApi.md#v1PropertyListPost) | **POST** /v1/property/list | List properties by a specific keyword


## `v1PropertyGetPost()`

```php
v1PropertyGetPost($property_get): \com.lodgea\com.lodgea.model\V1PropertyGetPost200Response
```

Get Property by ID

Get all information about a specific property by its ID. This parameter is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new com.lodgea\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_get = new \com.lodgea\com.lodgea.model\PropertyGet(); // \com.lodgea\com.lodgea.model\PropertyGet | Provide the property ID to get more information about it

try {
    $result = $apiInstance->v1PropertyGetPost($property_get);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->v1PropertyGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_get** | [**\com.lodgea\com.lodgea.model\PropertyGet**](../Model/PropertyGet.md)| Provide the property ID to get more information about it |

### Return type

[**\com.lodgea\com.lodgea.model\V1PropertyGetPost200Response**](../Model/V1PropertyGetPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1PropertyListPost()`

```php
v1PropertyListPost($property_list): \com.lodgea\com.lodgea.model\V1PropertyListPost200Response
```

List properties by a specific keyword

List properties by a specific keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new com.lodgea\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_list = new \com.lodgea\com.lodgea.model\PropertyList(); // \com.lodgea\com.lodgea.model\PropertyList | Provide the search keyword and optionally a page token to fetch further responses. The page token can be added if additional results should be returned. It is a base64 encoded dictionary and included in the first response in case not all results were delivered

try {
    $result = $apiInstance->v1PropertyListPost($property_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->v1PropertyListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_list** | [**\com.lodgea\com.lodgea.model\PropertyList**](../Model/PropertyList.md)| Provide the search keyword and optionally a page token to fetch further responses. The page token can be added if additional results should be returned. It is a base64 encoded dictionary and included in the first response in case not all results were delivered |

### Return type

[**\com.lodgea\com.lodgea.model\V1PropertyListPost200Response**](../Model/V1PropertyListPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
