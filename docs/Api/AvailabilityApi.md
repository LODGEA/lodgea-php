# com.lodgea\AvailabilityApi

All URIs are relative to https://api.eu.lodgea.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AvailabilitySearchPost()**](AvailabilityApi.md#v1AvailabilitySearchPost) | **POST** /v1/availability/search | Search for Availability


## `v1AvailabilitySearchPost()`

```php
v1AvailabilitySearchPost($availability_search): \com.lodgea\com.lodgea.model\V1AvailabilitySearchPost200Response
```

Search for Availability

Get availability information based on search criteria. The possible values for the different content parameters are listed below. All parameters are optional.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.lodgea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new com.lodgea\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availability_search = new \com.lodgea\com.lodgea.model\AvailabilitySearch(); // \com.lodgea\com.lodgea.model\AvailabilitySearch | Search Criteria, all parameters are optional

try {
    $result = $apiInstance->v1AvailabilitySearchPost($availability_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->v1AvailabilitySearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **availability_search** | [**\com.lodgea\com.lodgea.model\AvailabilitySearch**](../Model/AvailabilitySearch.md)| Search Criteria, all parameters are optional | [optional]

### Return type

[**\com.lodgea\com.lodgea.model\V1AvailabilitySearchPost200Response**](../Model/V1AvailabilitySearchPost200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
