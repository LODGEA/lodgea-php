# OpenAPI\Client\PropertyApi

All URIs are relative to https://api.eu.lodgea.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PropertyGetPost()**](PropertyApi.md#v1PropertyGetPost) | **POST** /v1/property/get | Get Property by ID


## `v1PropertyGetPost()`

```php
v1PropertyGetPost($property_get): \OpenAPI\Client\Model\V1PropertyGetPost200Response
```

Get Property by ID

Get all information about a specific property by its ID. This parameter is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_get = new \OpenAPI\Client\Model\PropertyGet(); // \OpenAPI\Client\Model\PropertyGet | Provide the property ID to get more information about it

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
 **property_get** | [**\OpenAPI\Client\Model\PropertyGet**](../Model/PropertyGet.md)| Provide the property ID to get more information about it |

### Return type

[**\OpenAPI\Client\Model\V1PropertyGetPost200Response**](../Model/V1PropertyGetPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)