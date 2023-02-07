# # InlineResponse2001List

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The properties unique code/ID. |
**language_code** | **string** | The language code of the language in which the property description is written.&lt;p&gt;Please note that beside the general restrictions listed below only languages configured during system setup for your respective tenant are allowed.&lt;/p&gt;&lt;p&gt;See also &lt;a href&#x3D;\&quot;#isolanguage-codes\&quot;&gt;in the appendix&lt;/a&gt;.&lt;/p&gt; |
**currency_code** | **string** | The currency code for the currency in which prices are returned.&lt;p&gt;See also &lt;a href&#x3D;\&quot;#currencycodes\&quot;&gt;in the appendix&lt;/a&gt;.&lt;/p&gt; |
**unit_system** | **string** | The unit system (either \&quot;metric\&quot; or \&quot;imperial\&quot;) used for measurements. |
**name** | **string** | The name of the property. |
**uri** | **string** | A URI for the property. |
**service_list** | **float[]** | A list of service codes indicating the services and amenities the property has.&lt;p&gt;See also &lt;a href&#x3D;\&quot;#servicecodes\&quot;&gt;in the appendix&lt;/a&gt;.&lt;/p&gt; |
**category_list** | **float[]** | A list of property class type codes indicating the types of the property.&lt;p&gt;See also &lt;a href&#x3D;\&quot;#propertyclass-type-codes\&quot;&gt;in the appendix&lt;/a&gt;.&lt;/p&gt; |
**uri_path** | **string** | A URI path for the property. |
**text** | **string** | A description of the property. |
**geo** | [**\com.lodgea\com.lodgea.model\InlineResponse2001Geo**](InlineResponse2001Geo.md) |  | [optional]
**media_list** | [**\com.lodgea\com.lodgea.model\InlineResponse2001MediaList[]**](InlineResponse2001MediaList.md) | A list of media objects for the property. |
**attraction_list** | [**\com.lodgea\com.lodgea.model\InlineResponse2001AttractionList[]**](InlineResponse2001AttractionList.md) | A list of objects describing the attractions available at the property. |
**lowest_price** | [**\com.lodgea\com.lodgea.model\InlineResponse2001LowestPrice**](InlineResponse2001LowestPrice.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
