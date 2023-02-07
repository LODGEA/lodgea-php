# # InlineResponse2003PropertyPolicyList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**check_in_time** | **float** | Check-in time (unix timestamp in ms). |
**check_out_time** | **float** | Check-out time (unix timestamp in ms). |
**total_guest_count** | **float** | The maximum number of guests allowed. | [optional]
**cancellation_policy_list** | [**\com.lodgea\com.lodgea.model\InlineResponse2003PropertyCancellationPolicyList[]**](InlineResponse2003PropertyCancellationPolicyList.md) | List of cancellation policies. |
**advance_booking_min** | **float** | The minimum number of days in advance a booking must be made |
**advance_booking_max** | **float** | The maximum number of days in advance a booking can be made |
**pets_policy** | [**\com.lodgea\com.lodgea.model\InlineResponse2003PropertyPetsPolicy**](InlineResponse2003PropertyPetsPolicy.md) |  | [optional]
**prepayment_policy** | **string** | The type of the prepayment policy. | [optional]
**guarantee_policy** | [**\com.lodgea\com.lodgea.model\InlineResponse2003PropertyGuaranteePolicy**](InlineResponse2003PropertyGuaranteePolicy.md) |  | [optional]
**tax_policy_list** | [**\com.lodgea\com.lodgea.model\InlineResponse2003PropertyTaxPolicyList[]**](InlineResponse2003PropertyTaxPolicyList.md) | A list of taxes and their policies. |
**fee_policy_list** | [**\com.lodgea\com.lodgea.model\InlineResponse2003PropertyFeePolicyList[]**](InlineResponse2003PropertyFeePolicyList.md) | A list of fees and their policies. |
**name** | **string** | The name of this policy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
