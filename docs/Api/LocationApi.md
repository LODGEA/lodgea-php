# com.lodgea\LocationApi

All URIs are relative to https://api.eu.lodgea.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1LocationSearchPost()**](LocationApi.md#v1LocationSearchPost) | **POST** /v1/location/search | Search for Location


## `v1LocationSearchPost()`

```php
v1LocationSearchPost($location_search): \com.lodgea\com.lodgea.model\V1LocationSearchPost200Response
```

Search for Location

Get a location by search text in free from. This parameter is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new com.lodgea\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_search = new \com.lodgea\com.lodgea.model\LocationSearch(); // \com.lodgea\com.lodgea.model\LocationSearch | Free-text search criteria

try {
    $result = $apiInstance->v1LocationSearchPost($location_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->v1LocationSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_search** | [**\com.lodgea\com.lodgea.model\LocationSearch**](../Model/LocationSearch.md)| Free-text search criteria |

### Return type

[**\com.lodgea\com.lodgea.model\V1LocationSearchPost200Response**](../Model/V1LocationSearchPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
