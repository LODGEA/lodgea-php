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

## API Endpoints

All URIs are relative to *https://api.eu.lodgea.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AvailabilityApi* | [**v1AvailabilitySearchPost**](docs/Api/AvailabilityApi.md#v1availabilitysearchpost) | **POST** /v1/availability/search | Search for Availability
*LocationApi* | [**v1LocationSearchPost**](docs/Api/LocationApi.md#v1locationsearchpost) | **POST** /v1/location/search | Search for Location
*PropertyApi* | [**v1PropertyGetPost**](docs/Api/PropertyApi.md#v1propertygetpost) | **POST** /v1/property/get | Get Property by ID

## Models

- [AvailabilitySearch](docs/Model/AvailabilitySearch.md)
- [LocationSearch](docs/Model/LocationSearch.md)
- [PropertyGet](docs/Model/PropertyGet.md)
- [V1AvailabilitySearchPost200Response](docs/Model/V1AvailabilitySearchPost200Response.md)
- [V1AvailabilitySearchPost200ResponseListInner](docs/Model/V1AvailabilitySearchPost200ResponseListInner.md)
- [V1AvailabilitySearchPost200ResponseListInnerAttractionListInner](docs/Model/V1AvailabilitySearchPost200ResponseListInnerAttractionListInner.md)
- [V1AvailabilitySearchPost200ResponseListInnerAttractionListInnerDistance](docs/Model/V1AvailabilitySearchPost200ResponseListInnerAttractionListInnerDistance.md)
- [V1AvailabilitySearchPost200ResponseListInnerGeo](docs/Model/V1AvailabilitySearchPost200ResponseListInnerGeo.md)
- [V1AvailabilitySearchPost200ResponseListInnerGeoLocation](docs/Model/V1AvailabilitySearchPost200ResponseListInnerGeoLocation.md)
- [V1AvailabilitySearchPost200ResponseListInnerLowestPrice](docs/Model/V1AvailabilitySearchPost200ResponseListInnerLowestPrice.md)
- [V1AvailabilitySearchPost200ResponseListInnerMediaListInner](docs/Model/V1AvailabilitySearchPost200ResponseListInnerMediaListInner.md)
- [V1LocationSearchPost200Response](docs/Model/V1LocationSearchPost200Response.md)
- [V1LocationSearchPost200ResponseListInner](docs/Model/V1LocationSearchPost200ResponseListInner.md)
- [V1PropertyGetPost200Response](docs/Model/V1PropertyGetPost200Response.md)
- [V1PropertyGetPost200ResponseProductListInner](docs/Model/V1PropertyGetPost200ResponseProductListInner.md)
- [V1PropertyGetPost200ResponseProductListInnerMealPlanListInner](docs/Model/V1PropertyGetPost200ResponseProductListInnerMealPlanListInner.md)
- [V1PropertyGetPost200ResponseProductListInnerPolicyInfo](docs/Model/V1PropertyGetPost200ResponseProductListInnerPolicyInfo.md)
- [V1PropertyGetPost200ResponseProductListInnerPolicyInfoCancellationPolicyListInner](docs/Model/V1PropertyGetPost200ResponseProductListInnerPolicyInfoCancellationPolicyListInner.md)
- [V1PropertyGetPost200ResponseProductListInnerRatePlanListInner](docs/Model/V1PropertyGetPost200ResponseProductListInnerRatePlanListInner.md)
- [V1PropertyGetPost200ResponseProductListInnerRatePlanListInnerPricingListInner](docs/Model/V1PropertyGetPost200ResponseProductListInnerRatePlanListInnerPricingListInner.md)
- [V1PropertyGetPost200ResponseProductListInnerRatePlanListInnerPricingListInnerPriceList](docs/Model/V1PropertyGetPost200ResponseProductListInnerRatePlanListInnerPricingListInnerPriceList.md)
- [V1PropertyGetPost200ResponseProductListInnerRoomTypeListInner](docs/Model/V1PropertyGetPost200ResponseProductListInnerRoomTypeListInner.md)
- [V1PropertyGetPost200ResponseProperty](docs/Model/V1PropertyGetPost200ResponseProperty.md)
- [V1PropertyGetPost200ResponsePropertyAwardListInner](docs/Model/V1PropertyGetPost200ResponsePropertyAwardListInner.md)
- [V1PropertyGetPost200ResponsePropertyCancellationGracePeriod](docs/Model/V1PropertyGetPost200ResponsePropertyCancellationGracePeriod.md)
- [V1PropertyGetPost200ResponsePropertyContactListInner](docs/Model/V1PropertyGetPost200ResponsePropertyContactListInner.md)
- [V1PropertyGetPost200ResponsePropertyContactListInnerAddressListInner](docs/Model/V1PropertyGetPost200ResponsePropertyContactListInnerAddressListInner.md)
- [V1PropertyGetPost200ResponsePropertyFacilityInfo](docs/Model/V1PropertyGetPost200ResponsePropertyFacilityInfo.md)
- [V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInner](docs/Model/V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInner.md)
- [V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerAmenityListInner](docs/Model/V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerAmenityListInner.md)
- [V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner](docs/Model/V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner.md)
- [V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerRoomAmenityListInner](docs/Model/V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerRoomAmenityListInner.md)
- [V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerTagListInner](docs/Model/V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerTagListInner.md)
- [V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMessageListInner](docs/Model/V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMessageListInner.md)
- [V1PropertyGetPost200ResponsePropertyGeo](docs/Model/V1PropertyGetPost200ResponsePropertyGeo.md)
- [V1PropertyGetPost200ResponsePropertyGeoDa](docs/Model/V1PropertyGetPost200ResponsePropertyGeoDa.md)
- [V1PropertyGetPost200ResponsePropertyGeoDe](docs/Model/V1PropertyGetPost200ResponsePropertyGeoDe.md)
- [V1PropertyGetPost200ResponsePropertyGeoDeLocation](docs/Model/V1PropertyGetPost200ResponsePropertyGeoDeLocation.md)
- [V1PropertyGetPost200ResponsePropertyGeoEn](docs/Model/V1PropertyGetPost200ResponsePropertyGeoEn.md)
- [V1PropertyGetPost200ResponsePropertyGeoNl](docs/Model/V1PropertyGetPost200ResponsePropertyGeoNl.md)
- [V1PropertyGetPost200ResponsePropertyGuestInfo](docs/Model/V1PropertyGetPost200ResponsePropertyGuestInfo.md)
- [V1PropertyGetPost200ResponsePropertyMediaListInner](docs/Model/V1PropertyGetPost200ResponsePropertyMediaListInner.md)
- [V1PropertyGetPost200ResponsePropertyMediaListInnerTagListInner](docs/Model/V1PropertyGetPost200ResponsePropertyMediaListInnerTagListInner.md)
- [V1PropertyGetPost200ResponsePropertyPolicyListInner](docs/Model/V1PropertyGetPost200ResponsePropertyPolicyListInner.md)
- [V1PropertyGetPost200ResponsePropertyPolicyListInnerPetsPolicy](docs/Model/V1PropertyGetPost200ResponsePropertyPolicyListInnerPetsPolicy.md)
- [V1PropertyGetPost200ResponsePropertyPolicyListInnerTaxPolicyListInner](docs/Model/V1PropertyGetPost200ResponsePropertyPolicyListInnerTaxPolicyListInner.md)
- [V1PropertyGetPost200ResponsePropertyPropertyInfo](docs/Model/V1PropertyGetPost200ResponsePropertyPropertyInfo.md)
- [V1PropertyGetPost200ResponsePropertyPropertyInfoAcceptedPaymentListInner](docs/Model/V1PropertyGetPost200ResponsePropertyPropertyInfoAcceptedPaymentListInner.md)
- [V1PropertyGetPost200ResponsePropertyPropertyInfoCategoryListInner](docs/Model/V1PropertyGetPost200ResponsePropertyPropertyInfoCategoryListInner.md)
- [V1PropertyGetPost200ResponsePropertyPropertyInfoLocation](docs/Model/V1PropertyGetPost200ResponsePropertyPropertyInfoLocation.md)
- [V1PropertyGetPost200ResponsePropertyPropertyInfoMessageListInner](docs/Model/V1PropertyGetPost200ResponsePropertyPropertyInfoMessageListInner.md)
- [V1PropertyGetPost200ResponsePropertyRecordCreated](docs/Model/V1PropertyGetPost200ResponsePropertyRecordCreated.md)
- [V1PropertyGetPost200ResponsePropertyRecordModified](docs/Model/V1PropertyGetPost200ResponsePropertyRecordModified.md)
- [V1PropertyGetPost200ResponsePropertyServiceListInner](docs/Model/V1PropertyGetPost200ResponsePropertyServiceListInner.md)
- [V1PropertyGetPost200ResponsePropertyTransaction](docs/Model/V1PropertyGetPost200ResponsePropertyTransaction.md)
- [V1PropertyGetPost200ResponsePropertyTransactionExternalListInner](docs/Model/V1PropertyGetPost200ResponsePropertyTransactionExternalListInner.md)

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

info@lodgea.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
