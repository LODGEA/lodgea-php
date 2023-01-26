# # PropertiesPropertyIdGet200ResponseProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The properties unique identifier. |
**name** | **string** | The properties name. |
**record_created** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyRecordCreated**](PropertiesPropertyIdGet200ResponsePropertyRecordCreated.md) |  |
**record_modified** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyRecordModified**](PropertiesPropertyIdGet200ResponsePropertyRecordModified.md) |  |
**property_info** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyPropertyInfo**](PropertiesPropertyIdGet200ResponsePropertyPropertyInfo.md) |  |
**guest_info** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyGuestInfo**](PropertiesPropertyIdGet200ResponsePropertyGuestInfo.md) |  | [optional]
**award_list** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyAwardListInner[]**](PropertiesPropertyIdGet200ResponsePropertyAwardListInner.md) | A list of the ratings available for this property. |
**contact_list** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyContactListInner[]**](PropertiesPropertyIdGet200ResponsePropertyContactListInner.md) | A contact with a profile type and a list of addresses |
**facility_info** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyFacilityInfo**](PropertiesPropertyIdGet200ResponsePropertyFacilityInfo.md) |  | [optional]
**media_list** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner[]**](PropertiesPropertyIdGet200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner.md) | A list of media objects for the property. |
**geo** | [**array<string,\com.lodgea\com.lodgea.model\AvailablePropertiesInner1Geo>**](AvailablePropertiesInner1Geo.md) | An object containing language codes as keys and objects describing the properties geographical location as values. | [optional]
**published** | **bool** | Indicates whether the policy has been published or not. |
**policy_list** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyPolicyListInner[]**](PropertiesPropertyIdGet200ResponsePropertyPolicyListInner.md) | A list of policies associated with the property. |
**uri** | **string** | A unique identifier for the accommodation. | [optional]
**cancellation_grace_period** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyCancellationGracePeriod**](PropertiesPropertyIdGet200ResponsePropertyCancellationGracePeriod.md) |  | [optional]
**service_list** | [**\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyServiceListInner[]**](PropertiesPropertyIdGet200ResponsePropertyServiceListInner.md) | A list of objects each describing an available service, its pricing and its availability. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
