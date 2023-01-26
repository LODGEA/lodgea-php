# lodgea-php

LODGEA SDK for PHP. Check out https://docs.lodgea.io for more information.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/lodgea-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$availability_search_post_request = new \com.lodgea\com.lodgea.model\AvailabilitySearchPostRequest(); // \com.lodgea\com.lodgea.model\AvailabilitySearchPostRequest

try {
    $result = $apiInstance->availabilitySearchPost($availability_search_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->availabilitySearchPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.eu.lodgea.io/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**availabilitySearchPost**](docs/Api/DefaultApi.md#availabilitysearchpost) | **POST** /availability/search | Search for availability
*DefaultApi* | [**locationSearchPost**](docs/Api/DefaultApi.md#locationsearchpost) | **POST** /location/search | Search for location
*DefaultApi* | [**propertiesGet**](docs/Api/DefaultApi.md#propertiesget) | **GET** /properties | List (filtered) properties
*DefaultApi* | [**propertiesPropertyIdAvailabilityGet**](docs/Api/DefaultApi.md#propertiespropertyidavailabilityget) | **GET** /properties/{propertyId}/availability | Get a properties availability
*DefaultApi* | [**propertiesPropertyIdGet**](docs/Api/DefaultApi.md#propertiespropertyidget) | **GET** /properties/{propertyId} | Get a properties details

## Models

- [AvailabilitySearchPost200Response](docs/Model/AvailabilitySearchPost200Response.md)
- [AvailabilitySearchPostRequest](docs/Model/AvailabilitySearchPostRequest.md)
- [AvailablePropertiesInner](docs/Model/AvailablePropertiesInner.md)
- [AvailablePropertiesInner1](docs/Model/AvailablePropertiesInner1.md)
- [AvailablePropertiesInner1AttractionListInner](docs/Model/AvailablePropertiesInner1AttractionListInner.md)
- [AvailablePropertiesInner1AttractionListInnerDistance](docs/Model/AvailablePropertiesInner1AttractionListInnerDistance.md)
- [AvailablePropertiesInner1Geo](docs/Model/AvailablePropertiesInner1Geo.md)
- [AvailablePropertiesInner1GeoLocation](docs/Model/AvailablePropertiesInner1GeoLocation.md)
- [AvailablePropertiesInner1LowestPrice](docs/Model/AvailablePropertiesInner1LowestPrice.md)
- [AvailablePropertiesInner1MediaListInner](docs/Model/AvailablePropertiesInner1MediaListInner.md)
- [LocationSearchPost200Response](docs/Model/LocationSearchPost200Response.md)
- [LocationSearchPost400Response](docs/Model/LocationSearchPost400Response.md)
- [LocationSearchPost400ResponseValidationErrorsInner](docs/Model/LocationSearchPost400ResponseValidationErrorsInner.md)
- [LocationSearchPostRequest](docs/Model/LocationSearchPostRequest.md)
- [PropertiesGet200Response](docs/Model/PropertiesGet200Response.md)
- [PropertiesGet200ResponseListInner](docs/Model/PropertiesGet200ResponseListInner.md)
- [PropertiesPropertyIdAvailabilityGet200Response](docs/Model/PropertiesPropertyIdAvailabilityGet200Response.md)
- [PropertiesPropertyIdAvailabilityGet200ResponseAvailabilityListInner](docs/Model/PropertiesPropertyIdAvailabilityGet200ResponseAvailabilityListInner.md)
- [PropertiesPropertyIdGet200Response](docs/Model/PropertiesPropertyIdGet200Response.md)
- [PropertiesPropertyIdGet200ResponseProductListInner](docs/Model/PropertiesPropertyIdGet200ResponseProductListInner.md)
- [PropertiesPropertyIdGet200ResponseProductListInnerPolicyInfo](docs/Model/PropertiesPropertyIdGet200ResponseProductListInnerPolicyInfo.md)
- [PropertiesPropertyIdGet200ResponseProductListInnerRatePlanListInner](docs/Model/PropertiesPropertyIdGet200ResponseProductListInnerRatePlanListInner.md)
- [PropertiesPropertyIdGet200ResponseProductListInnerRatePlanListInnerPricingListInner](docs/Model/PropertiesPropertyIdGet200ResponseProductListInnerRatePlanListInnerPricingListInner.md)
- [PropertiesPropertyIdGet200ResponseProperty](docs/Model/PropertiesPropertyIdGet200ResponseProperty.md)
- [PropertiesPropertyIdGet200ResponsePropertyAwardListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyAwardListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyCancellationGracePeriod](docs/Model/PropertiesPropertyIdGet200ResponsePropertyCancellationGracePeriod.md)
- [PropertiesPropertyIdGet200ResponsePropertyContactListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyContactListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyContactListInnerAddressListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyContactListInnerAddressListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyFacilityInfo](docs/Model/PropertiesPropertyIdGet200ResponsePropertyFacilityInfo.md)
- [PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInnerAmenityListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInnerAmenityListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInnerMessageListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInnerMessageListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyGuestInfo](docs/Model/PropertiesPropertyIdGet200ResponsePropertyGuestInfo.md)
- [PropertiesPropertyIdGet200ResponsePropertyPolicyListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyPolicyListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerCancellationPolicyListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerCancellationPolicyListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerFeePolicyListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerFeePolicyListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerGuaranteePolicy](docs/Model/PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerGuaranteePolicy.md)
- [PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerPetsPolicy](docs/Model/PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerPetsPolicy.md)
- [PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerTaxPolicyListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyPolicyListInnerTaxPolicyListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyPropertyInfo](docs/Model/PropertiesPropertyIdGet200ResponsePropertyPropertyInfo.md)
- [PropertiesPropertyIdGet200ResponsePropertyPropertyInfoAcceptedPaymentListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyPropertyInfoAcceptedPaymentListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyPropertyInfoMessageListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyPropertyInfoMessageListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyRecordCreated](docs/Model/PropertiesPropertyIdGet200ResponsePropertyRecordCreated.md)
- [PropertiesPropertyIdGet200ResponsePropertyRecordModified](docs/Model/PropertiesPropertyIdGet200ResponsePropertyRecordModified.md)
- [PropertiesPropertyIdGet200ResponsePropertyServiceListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyServiceListInner.md)
- [PropertiesPropertyIdGet200ResponsePropertyServiceListInnerOperationTimeListInner](docs/Model/PropertiesPropertyIdGet200ResponsePropertyServiceListInnerOperationTimeListInner.md)

## Authorization

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: apiKey
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@lodgea.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1.0`
    - Package version: ``
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
