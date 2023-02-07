# lodgea-php

LODGEA SDK for php. Check out https://docs.lodgea.io for more information.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

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
$inline_object1 = new \com.lodgea\com.lodgea.model\InlineObject1(); // \com.lodgea\com.lodgea.model\InlineObject1

try {
    $result = $apiInstance->availabilitySearchPost($inline_object1);
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

- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2001AttractionList](docs/Model/InlineResponse2001AttractionList.md)
- [InlineResponse2001Distance](docs/Model/InlineResponse2001Distance.md)
- [InlineResponse2001Geo](docs/Model/InlineResponse2001Geo.md)
- [InlineResponse2001GeoLocation](docs/Model/InlineResponse2001GeoLocation.md)
- [InlineResponse2001List](docs/Model/InlineResponse2001List.md)
- [InlineResponse2001LowestPrice](docs/Model/InlineResponse2001LowestPrice.md)
- [InlineResponse2001MediaList](docs/Model/InlineResponse2001MediaList.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2002List](docs/Model/InlineResponse2002List.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2003PolicyInfo](docs/Model/InlineResponse2003PolicyInfo.md)
- [InlineResponse2003PolicyInfoFeePolicyList](docs/Model/InlineResponse2003PolicyInfoFeePolicyList.md)
- [InlineResponse2003PolicyInfoTaxPolicyList](docs/Model/InlineResponse2003PolicyInfoTaxPolicyList.md)
- [InlineResponse2003PricingList](docs/Model/InlineResponse2003PricingList.md)
- [InlineResponse2003ProductList](docs/Model/InlineResponse2003ProductList.md)
- [InlineResponse2003Property](docs/Model/InlineResponse2003Property.md)
- [InlineResponse2003PropertyAddressList](docs/Model/InlineResponse2003PropertyAddressList.md)
- [InlineResponse2003PropertyAwardList](docs/Model/InlineResponse2003PropertyAwardList.md)
- [InlineResponse2003PropertyCancellationGracePeriod](docs/Model/InlineResponse2003PropertyCancellationGracePeriod.md)
- [InlineResponse2003PropertyCancellationPolicyList](docs/Model/InlineResponse2003PropertyCancellationPolicyList.md)
- [InlineResponse2003PropertyContactList](docs/Model/InlineResponse2003PropertyContactList.md)
- [InlineResponse2003PropertyFacilityInfo](docs/Model/InlineResponse2003PropertyFacilityInfo.md)
- [InlineResponse2003PropertyFacilityInfoAmenityList](docs/Model/InlineResponse2003PropertyFacilityInfoAmenityList.md)
- [InlineResponse2003PropertyFacilityInfoGuestRoomList](docs/Model/InlineResponse2003PropertyFacilityInfoGuestRoomList.md)
- [InlineResponse2003PropertyFacilityInfoMediaList](docs/Model/InlineResponse2003PropertyFacilityInfoMediaList.md)
- [InlineResponse2003PropertyFacilityInfoMessageList](docs/Model/InlineResponse2003PropertyFacilityInfoMessageList.md)
- [InlineResponse2003PropertyFeePolicyList](docs/Model/InlineResponse2003PropertyFeePolicyList.md)
- [InlineResponse2003PropertyGuaranteePolicy](docs/Model/InlineResponse2003PropertyGuaranteePolicy.md)
- [InlineResponse2003PropertyGuestInfo](docs/Model/InlineResponse2003PropertyGuestInfo.md)
- [InlineResponse2003PropertyMediaList](docs/Model/InlineResponse2003PropertyMediaList.md)
- [InlineResponse2003PropertyOperationTimeList](docs/Model/InlineResponse2003PropertyOperationTimeList.md)
- [InlineResponse2003PropertyPetsPolicy](docs/Model/InlineResponse2003PropertyPetsPolicy.md)
- [InlineResponse2003PropertyPolicyList](docs/Model/InlineResponse2003PropertyPolicyList.md)
- [InlineResponse2003PropertyPropertyInfo](docs/Model/InlineResponse2003PropertyPropertyInfo.md)
- [InlineResponse2003PropertyPropertyInfoAcceptedPaymentList](docs/Model/InlineResponse2003PropertyPropertyInfoAcceptedPaymentList.md)
- [InlineResponse2003PropertyPropertyInfoMessageList](docs/Model/InlineResponse2003PropertyPropertyInfoMessageList.md)
- [InlineResponse2003PropertyRecordCreated](docs/Model/InlineResponse2003PropertyRecordCreated.md)
- [InlineResponse2003PropertyRecordModified](docs/Model/InlineResponse2003PropertyRecordModified.md)
- [InlineResponse2003PropertyServiceList](docs/Model/InlineResponse2003PropertyServiceList.md)
- [InlineResponse2003PropertyTaxPolicyList](docs/Model/InlineResponse2003PropertyTaxPolicyList.md)
- [InlineResponse2003RatePlanList](docs/Model/InlineResponse2003RatePlanList.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2004AvailabilityList](docs/Model/InlineResponse2004AvailabilityList.md)
- [InlineResponse2004PricingList](docs/Model/InlineResponse2004PricingList.md)
- [InlineResponse2004RatePlanList](docs/Model/InlineResponse2004RatePlanList.md)
- [InlineResponse200List](docs/Model/InlineResponse200List.md)
- [InlineResponse400](docs/Model/InlineResponse400.md)
- [InlineResponse4001](docs/Model/InlineResponse4001.md)
- [InlineResponse4001ValidationErrors](docs/Model/InlineResponse4001ValidationErrors.md)
- [InlineResponse400ValidationErrors](docs/Model/InlineResponse400ValidationErrors.md)

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

- API version: `1.2.0`
    - Package version: `1.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
