# # InlineResponse2003PropertyPropertyInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_count** | **float** | The amount of units the property has. | [optional]
**message_list** | [**\com.lodgea\com.lodgea.model\InlineResponse2003PropertyPropertyInfoMessageList[]**](InlineResponse2003PropertyPropertyInfoMessageList.md) | Contains a descriptive message for this property in all supported languages. |
**category_list** | **float[]** | A list of code of the property class types that apply to the property. |
**language_list** | **string[]** | The codes of languages the staff of this property can speak. Please note that these codes partially differ from the two character ISO language codes widely used throughout the API as they partially include country specific language code.&lt;p&gt;See also &lt;a href&#x3D;\&quot;#languagecountry-code\&quot;&gt;in the appendix&lt;/a&gt;.&lt;/p&gt; |
**location** | [**\com.lodgea\com.lodgea.model\InlineResponse2001GeoLocation**](InlineResponse2001GeoLocation.md) |  | [optional]
**accepted_payment_list** | [**\com.lodgea\com.lodgea.model\InlineResponse2003PropertyPropertyInfoAcceptedPaymentList[]**](InlineResponse2003PropertyPropertyInfoAcceptedPaymentList.md) | A list of the accepted payment methods. Payment methods might subject to frequent change as payment providers come and go. You should always implement a way to handle new, unexpected payment methods.&lt;p&gt;See also &lt;a href&#x3D;\&quot;#paymenttypes\&quot;&gt;in the appendix&lt;/a&gt;.&lt;/p&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
