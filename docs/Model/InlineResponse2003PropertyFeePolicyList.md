# # InlineResponse2003PropertyFeePolicyList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type_code** | **float** | The code that represents the type of fee.&lt;p&gt;See also &lt;a href&#x3D;\&quot;#feetype-codes\&quot;&gt;in the appendix&lt;/a&gt;.&lt;/p&gt; |
**percent** | **float** | The charged percentage if applicable. | [optional]
**charge_type** | **string** | The type of charge. |
**charge_frequency_code** | **float** | The code that represents the frequency of charge.&lt;p&gt;See also &lt;a href&#x3D;\&quot;#chargetype-codes\&quot;&gt;in the appendix&lt;/a&gt;.&lt;/p&gt; |
**currency_code** | **string** | The currency code of the currency in that the charge is applied.&lt;p&gt;See also &lt;a href&#x3D;\&quot;#currencycodes\&quot;&gt;in the appendix&lt;/a&gt;.&lt;/p&gt; |
**condition_list** | **string[]** | A list of conditions for the tax. Is empty if &lt;code&gt;chargeType&lt;/code&gt; is not &lt;code&gt;conditional&lt;/code&gt;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
