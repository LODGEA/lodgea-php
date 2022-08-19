<?php
/**
 * V1PropertyGetPost200ResponsePropertyGeoEn
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LODGEA OTA Service API Reference
 *
 * # Introduction  Whether you own your property or not, LODGEA provides the platform to provide accommodation services to your consumers through a variety of connectivity options and business models. LODGEA provides a flexible and open platform for many use cases.  This API allows you to search for availabilities or locations and get all available information about a specific property.  # API Endpoint  ``` https://api.eu.lodgea.io/v1/ ```  The API is only accessible via HTTPS, the base URL is <code>https://api.eu.lodgea.io/</code>, and the current version is <code>v1</code> which results in the base URL for all requests: <code>https://api.eu.lodgea.io/v1/</code>.  # Datacenters  The API is only accessible via HTTPS and the current version is <code>v1</code>, which results in a URL like: <code>https://api.lodgea.io/v1/</code>, depending on the datacenter.  ## EU Datacenter  ``` https://api.eu.lodgea.io/v1/ ```  This is the default datacenter.  ## US Datacenter  ``` https://api.us.lodgea.io/v2/ ```  ## German Datacenter  ``` https://api.uat.lodgea.io/v2/ ```  # Usage  [curl](http://curl.haxx.se/) is used primarily to send requests to LODGEA in the [Usage examples](#Usage examples) in this Readme.  For [Postman](https://www.postman.com/), the OpenAPI YAML definition can be imported as collection over the `Import` button. In the `variables` menu under `Collections`, you can set the `baseURL` value to the specific region. The API key can be set under each request in the `Authorization` tab.  There are SDKs for many popular languages available on GitHub:  - https://github.com/lodgea/lodgea-java - https://github.com/lodgea/lodgea-js - https://github.com/lodgea/lodgea-php - https://github.com/lodgea/lodgea-csharp - https://github.com/lodgea/lodgea-python  # Cross-Origin Resource Sharing  This API features Cross-Origin Resource Sharing (CORS) implemented in compliance with [W3C spec](https://www.w3.org/TR/cors/), that allows cross-domain communication from the browser. All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.  # Authentication  The LODGEA API offers authentication via API Key. Please create your own API Key in the management UI. Then add your key as `apiKey` header to the request. If you receive a `401` response, make sure your filled key is valid.  # Usage examples  Learn how to work more efficiently with LODGEA API v1 with these workflow-oriented examples.  ## Get Property by ID  ``` POST /v1/property/get ```  Get all information about a specific property by its ID.  #### Parameters  | Name                  | Type     | Description               | Example             | | --------------------- | -------- | ------------------------- | ------------------- | | `propertyId` required | `string` | ID of the property to get | strandresidenz-sylt |  #### Example Request  ``` curl --location --request POST 'https://api.eu.lodgea.io/v1/property/get' \\ --header 'Content-Type: application/json' \\ --header 'Accept: application/json' \\ --header 'apiKey: <YOUR_API_KEY>' \\ --data-raw '{   \"propertyId\": \"strandresidenz-sylt\" }' ```  ## Search for Location  ``` POST /v1/location/search ```  Get a location by search text in free-text form.  #### Parameters  | Name                  | Type     | Description | Example             | | --------------------- | -------- | ----------- | ------------------- | | `searchText` required | `string` | Search text | Hotel Stadt Hamburg |  #### Example Request  ``` curl --location --request POST 'https://api.eu.lodgea.io/v1/location/search' \\ --header 'Content-Type: application/json' \\ --header 'Accept: application/json' \\ --header 'apiKey: <YOUR_API_KEY>' \\ --data-raw '{   \"searchText\": \"Hotel Stadt Hamburg\" }' ```  ## Search for Availability  ``` POST /v1/availability/search ```  Get availability information based on search criteria. All parameter codes are listed in the [appendix](#Appendix).  #### Parameters  | Name                       | Type           | Description                                                  | Example    | | -------------------------- | -------------- | ------------------------------------------------------------ | ---------- | | `adultCount` optional      | integer        | Number of adults                                             | 2          | | `childCount` optional      | integer        | Number of childs                                             | 1          | | `childAgeList` optional    | array<integer> | Age of the childs as integer array                           | [3]        | | `currencyCode` optional    | string         | Currency code, see [currencyCode](##CurrencyCode)            | EUR        | | `minLengthOfStay` optional | integer        | Minimum days of stay                                         | 1          | | `maxLengthOfStay` optional | integer        | Maximum days of stay                                         | 27         | | `locationName` optional    | string         | Name of the location                                         | Sylt       | | `locationType` optional    | string         | Type of the location, see [locationType](##locationType)     | locality   | | `earliestArrival` optional | date           | Earliest arrival date, format is: YYYY-MM-DD                 | 2022-09-01 | | `latestReturn` optional    | date           | Latest return date, format is: YYYY-MM-DD                    | 2022-09-08 | | `sort` optional            | string         | Sort order, either `quality` or `price`                      | quality    | | `serviceList` optional     | array<string>  | List of service codes, see [serviceCode](##serviceCode)      | [242]      | | `typeList` optional        | array<string>  | List of type codes, see [typeCode](##typeCode)               | [20]       | | `unitTypeList` optional    | array<string>  | List of unit type codes, see [unitTypeCode](##unitTypeCode)  | [9]        | | `unitAmenityList` optional | array<string>  | List of unit amenity codes, see [unitAmenityCode](##unitAmenityCode) | [50]       | | `mealPlanList` optional    | array<string>  | List of meal plan codes, see [mealPlanCode](##mealPlanCode)  | [19]       |  #### Example Request  ``` curl --location --request POST 'https://api.eu.lodgea.io/v1/availability/search' \\ --header 'Content-Type: application/json' \\ --header 'Accept: application/json' \\ --header 'apiKey: <YOUR_API_KEY>' \\ --data-raw '{   \"adultCount\": 2,   \"childCount\": 1,   \"childAgeList\": [     3   ],   \"currencyCode\": \"EUR\",   \"minLengthOfStay\": 1,   \"maxLengthOfStay\": 27,   \"locationName\": \"Sylt\",   \"locationType\": \"locality\",   \"earliestArrival\": \"2022-09-01\",   \"latestReturn\": \"2022-09-08\",   \"sort\": \"quality\",   \"serviceList\": [     242   ],   \"typeList\": [     20   ],   \"unitTypeList\": [     9   ],   \"unitAmenityList\": [     50   ],   \"mealPlanList\": [     19   ] }' ```  # Appendix  ## Parameters  ### currencyCode  | Code | Name | | ---- | ---- | | 1    | EUR  | | 2    | GBP  | | 3    | AED  | | 4    | USD  | | 5    | INR  | | 6    | AUD  | | 7    | ARS  | | 8    | EGP  | | 9    | KWD  | | 10   | RUB  | | 11   | MYR  | | 12   | SAR  | | 13   | AZN  | | 14   | FJD  | | 15   | MXN  | | 16   | SGD  | | 17   | BHD  | | 18   | GEL  | | 19   | MDL  | | 20   | ZAR  | | 21   | BRL  | | 22   | HKD  | | 23   | NAD  | | 24   | SEK  | | 25   | BGN  | | 26   | HUF  | | 27   | TWD  | | 28   | CHF  | | 29   | CAD  | | 30   | NZD  | | 31   | THB  | | 32   | XOF  | | 33   | IDR  | | 34   | NOK  | | 35   | TRY  | | 36   | CLP  | | 37   | ILS  | | 38   | OMR  | | 39   | CNY  | | 40   | JPY  | | 41   | PLN  | | 42   | COP  | | 43   | JOD  | | 44   | UAH  | | 45   | CZK  | | 46   | KZT  | | 47   | QAR  | | 48   | DKK  | | 49   | KRW  | | 50   | RON  |  ### locationType  | Type                        | Name                        | Example                             | | --------------------------- | --------------------------- | ----------------------------------- | | formatted_address           | Formatted Address           | Nordhedig 20 25980 Sylt Deutschland | | place_id                    | Place ID                    | ChIJVaxqTevetEcRyfs8PGHK6mw         | | locality                    | Locality                    | Sylt                                | | administrative_area_level_1 | Administrative Area Level 1 | Schleswig-Holstein                  | | administrative_area_level_3 | Administrative Area Level 3 | Nordfriesland                       | | state_code                  | State Code                  | SH                                  | | country                     | Country                     | Deutschland                         | | country_code                | Country Code                | DE                                  | | postal_code                 | Postal Code                 | 25980                               | | language                    | Language                    | de                                  | | natural_feature             | Natural Feature             | Sylt                                | | establishment               | Establishment               | Sylt                                | | sublocality                 | Sublocality                 | Westerland                          | | sublocality_level_1         | Sublocality Level 1         | Westerland                          | | streetNumber                | Street Number               | 20                                  | | route                       | Route                       | Nordhedig                           |  ### serviceCode  | Code  | Name                                                    | | ----- | ------------------------------------------------------- | | 1     | 24-hour front desk                                      | | 2     | 24-hour room service                                    | | 3     | 24-hour security                                        | | 4     | Adjoining rooms                                         | | 5     | Air conditioning                                        | | 6     | Airline desk                                            | | 7     | ATM/Cash machine                                        | | 8     | Baby sitting                                            | | 9     | BBQ/Picnic area                                         | | 10    | Bilingual staff                                         | | 11    | Bookstore                                               | | 12    | Boutiques/stores                                        | | 13    | Brailed elevators                                       | | 14    | Business library                                        | | 15    | Car rental desk                                         | | 16    | Casino                                                  | | 17    | Check cashing policy                                    | | 18    | Check-in kiosk                                          | | 19    | Cocktail lounge                                         | | 20    | Coffee shop                                             | | 21    | Coin operated laundry                                   | | 22    | Concierge desk                                          | | 23    | Concierge floor                                         | | 24    | Conference facilities                                   | | 25    | Courtyard                                               | | 26    | Currency exchange                                       | | 27    | Desk with electrical outlet                             | | 28    | Doctor on call                                          | | 29    | Door man                                                | | 30    | Driving range                                           | | 31    | Drugstore/pharmacy                                      | | 32    | Duty free shop                                          | | 33    | Elevators                                               | | 34    | Executive floor                                         | | 35    | Exercise gym                                            | | 36    | Express check-in                                        | | 37    | Express check-out                                       | | 38    | Family plan                                             | | 39    | Florist                                                 | | 40    | Folios                                                  | | 41    | Free airport shuttle                                    | | 42    | Free parking                                            | | 43    | Free transportation                                     | | 44    | Game room                                               | | 45    | Gift/News stand                                         | | 46    | Hairdresser/barber                                      | | 47    | Accessible facilities                                   | | 48    | Health club                                             | | 49    | Heated pool                                             | | 50    | Housekeeping - daily                                    | | 51    | Housekeeping - weekly                                   | | 52    | Ice machine                                             | | 53    | Indoor parking                                          | | 54    | Indoor pool                                             | | 55    | Jacuzzi                                                 | | 56    | Jogging track                                           | | 57    | Kennels                                                 | | 58    | Laundry/Valet service                                   | | 59    | Liquor store                                            | | 60    | Live entertainment                                      | | 61    | Massage services                                        | | 62    | Nightclub                                               | | 63    | Off-Site parking                                        | | 64    | On-Site parking                                         | | 65    | Outdoor parking                                         | | 66    | Outdoor pool                                            | | 67    | Package/Parcel services                                 | | 68    | Parking                                                 | | 69    | Photocopy center                                        | | 70    | Playground                                              | | 71    | Pool                                                    | | 72    | Poolside snack bar                                      | | 73    | Public address system                                   | | 74    | Ramp access                                             | | 75    | Recreational vehicle parking                            | | 76    | Restaurant                                              | | 77    | Room service                                            | | 78    | Safe deposit box                                        | | 79    | Sauna                                                   | | 80    | Security                                                | | 81    | Shoe shine stand                                        | | 82    | Shopping mall                                           | | 83    | Solarium                                                | | 84    | Spa                                                     | | 85    | Sports bar                                              | | 86    | Steam bath                                              | | 87    | Storage space                                           | | 88    | Sundry/Convenience store                                | | 89    | Technical concierge                                     | | 90    | Theatre desk                                            | | 91    | Tour/sightseeing desk                                   | | 92    | Translation services                                    | | 93    | Travel agency                                           | | 94    | Truck parking                                           | | 95    | Valet cleaning                                          | | 96    | Dry cleaning                                            | | 97    | Valet parking                                           | | 98    | Vending machines                                        | | 99    | Video tapes                                             | | 100   | Wakeup service                                          | | 101   | Wheelchair access                                       | | 102   | Whirlpool                                               | | 103   | Multilingual staff                                      | | 104   | Wedding services                                        | | 105   | Banquet facilities                                      | | 106   | Bell staff/porter                                       | | 107   | Beauty shop/salon                                       | | 108   | Complimentary self service laundry                      | | 109   | Direct dial telephone                                   | | 110   | Female traveler room/floor                              | | 111   | Pharmacy                                                | | 112   | Stables                                                 | | 113   | 120 AC                                                  | | 114   | 120 DC                                                  | | 115   | 220 AC                                                  | | 116   | Accessible parking                                      | | 117   | 220 DC                                                  | | 118   | Barbeque grills                                         | | 119   | Women's clothing                                        | | 120   | Men's clothing                                          | | 121   | Children's clothing                                     | | 122   | Shops and commercial services                           | | 123   | Video games                                             | | 124   | Sports bar open for lunch                               | | 125   | Sports bar open for dinner                              | | 126   | Room service - full menu                                | | 127   | Room service - limited menu                             | | 128   | Room service - limited hours                            | | 129   | Valet same day dry cleaning                             | | 130   | Body scrub                                              | | 131   | Body wrap                                               | | 132   | Public area air conditioned                             | | 133   | Efolio available to company                             | | 134   | Individual Efolio available                             | | 135   | Video review billing                                    | | 136   | Butler service                                          | | 137   | Complimentary in-room coffee or tea                     | | 138   | Complimentary buffet breakfast                          | | 139   | Complimentary cocktails                                 | | 140   | Complimentary coffee in lobby                           | | 141   | Complimentary continental breakfast                     | | 142   | Complimentary full american breakfast                   | | 143   | Dinner delivery service from local restaurant           | | 144   | Complimentary newspaper delivered to room               | | 145   | Complimentary newspaper in lobby                        | | 146   | Complimentary shoeshine                                 | | 147   | Evening reception                                       | | 148   | Front desk                                              | | 149   | Grocery shopping service available                      | | 150   | Halal food available                                    | | 151   | Kosher food available                                   | | 152   | Limousine service                                       | | 153   | Managers reception                                      | | 154   | Medical Facilities Service                              | | 155   | Telephone jack adaptor available                        | | 156   | All-inclusive meal plan                                 | | 157   | Buffet breakfast                                        | | 158   | Communal bar area                                       | | 159   | Continental breakfast                                   | | 160   | Full meal plan                                          | | 161   | Full american breakfast                                 | | 162   | Meal plan available                                     | | 163   | Modified american meal plan                             | | 164   | Food and beverage outlets                               | | 165   | Lounges/bars                                            | | 166   | Barber shop                                             | | 167   | Video checkout                                          | | 168   | Onsite laundry                                          | | 169   | 24-hour food & beverage kiosk                           | | 170   | Concierge lounge                                        | | 171   | Parking fee managed by hotel                            | | 172   | Transportation                                          | | 173   | Breakfast served in restaurant                          | | 174   | Lunch served in restaurant                              | | 175   | Dinner served in restaurant                             | | 176   | Full service housekeeping                               | | 177   | Limited service housekeeping                            | | 178   | High speed internet access for laptop in public areas   | | 179   | Wireless internet connection in public areas            | | 180   | Additional services/amenities/facilities on property    | | 181   | Transportation services - local area                    | | 182   | Transportation services - local office                  | | 183   | DVD/video rental                                        | | 184   | Parking lot                                             | | 185   | Parking deck                                            | | 186   | Street side parking                                     | | 187   | Cocktail lounge with entertainment                      | | 188   | Cocktail lounge with light fare                         | | 189   | Motorcycle parking                                      | | 190   | Phone services                                          | | 191   | Ballroom                                                | | 192   | Bus parking                                             | | 193   | Children's play area                                    | | 194   | Children's nursery                                      | | 195   | Disco                                                   | | 196   | Early check-in                                          | | 197   | Locker room                                             | | 198   | Non-smoking rooms (generic)                             | | 199   | Train access                                            | | 200   | Aerobics instruction                                    | | 201   | Baggage hold                                            | | 202   | Bicycle rentals                                         | | 203   | Dietician                                               | | 204   | Late check-out available                                | | 205   | Pet-sitting services                                    | | 206   | Prayer mats                                             | | 207   | Sports trainer                                          | | 208   | Turndown service                                        | | 209   | DVDs/videos - children                                  | | 210   | Bank                                                    | | 211   | Lobby coffee service                                    | | 212   | Banking services                                        | | 213   | Stairwells                                              | | 214   | Pet amenities available                                 | | 215   | Exhibition/convention floor                             | | 216   | Long term parking                                       | | 217   | Children not allowed                                    | | 218   | Children welcome                                        | | 219   | Courtesy car                                            | | 220   | Hotel does not provide pornographic films/TV            | | 221   | Hotspots                                                | | 222   | Free high speed internet connection                     | | 223   | Internet services                                       | | 224   | Pets allowed                                            | | 225   | Gourmet highlights                                      | | 226   | Catering services                                       | | 227   | Complimentary breakfast                                 | | 228   | Business center                                         | | 229   | Business services                                       | | 230   | Secured parking                                         | | 231   | Racquetball                                             | | 232   | Snow sports                                             | | 233   | Tennis court                                            | | 234   | Water sports                                            | | 235   | Child programs                                          | | 236   | Golf                                                    | | 237   | Horseback riding                                        | | 238   | Oceanfront                                              | | 239   | Beachfront                                              | | 240   | Hair dryer                                              | | 241   | Ironing board                                           | | 242   | Heated guest rooms                                      | | 243   | Toilet                                                  | | 244   | Parlor                                                  | | 245   | Video game player                                       | | 246   | Thalassotherapy                                         | | 247   | Private dining for groups                               | | 248   | Hearing impaired services                               | | 249   | Carryout breakfast                                      | | 250   | Deluxe continental breakfast                            | | 251   | Hot continental breakfast                               | | 252   | Hot breakfast                                           | | 253   | Private pool                                            | | 254   | Connecting rooms                                        | | 255   | Data port                                               | | 256   | Exterior corridors                                      | | 257   | Gulf view                                               | | 258   | Accessible rooms                                        | | 259   | High speed internet access                              | | 260   | Interior corridors                                      | | 261   | High speed wireless                                     | | 262   | Kitchenette                                             | | 263   | Private bath or shower                                  | | 264   | Fire safety compliant                                   | | 265   | Welcome drink                                           | | 266   | Boarding pass print-out available                       | | 267   | Printing services available                             | | 268   | All public areas non-smoking                            | | 269   | Meeting rooms                                           | | 270   | Movies in room                                          | | 271   | Secretarial service                                     | | 272   | Snow skiing                                             | | 273   | Water skiing                                            | | 274   | Fax service                                             | | 275   | Great room                                              | | 276   | Lobby                                                   | | 277   | Multiple phone lines billed separately                  | | 278   | Umbrellas                                               | | 279   | Gas station                                             | | 280   | Grocery store                                           | | 281   | 24-hour coffee shop                                     | | 282   | Airport shuttle service                                 | | 283   | Luggage service                                         | | 284   | Piano Bar                                               | | 285   | VIP security                                            | | 286   | Complimentary wireless internet                         | | 287   | Concierge breakfast                                     | | 288   | Same gender floor                                       | | 289   | Children programs                                       | | 290   | Building meets local, state and country building codes  | | 291   | Internet browser On TV                                  | | 292   | Newspaper                                               | | 293   | Parking - controlled access gates to enter parking area | | 294   | Hotel safe deposit box (not room safe box)              | | 295   | Storage space available – fee                           | | 296   | Type of entrances to guest rooms                        | | 297   | Beverage/cocktail                                       | | 298   | Cell phone rental                                       | | 299   | Coffee/tea                                              | | 300   | Early check in guarantee                                | | 301   | Food and beverage discount                              | | 302   | Late check out guarantee                                | | 303   | Room upgrade confirmed                                  | | 304   | Room upgrade on availability                            | | 305   | Shuttle to local businesses                             | | 306   | Shuttle to local attractions                            | | 307   | Social hour                                             | | 308   | Video billing                                           | | 309   | Welcome gift                                            | | 310   | Hypoallergenic rooms                                    | | 311   | Room air filtration                                     | | 312   | Smoke-free property                                     | | 313   | Water purification system in use                        | | 314   | Poolside service                                        | | 315   | Clothing store                                          | | 316   | Electric car charging stations                          | | 317   | Office rental                                           | | 318   | Piano                                                   | | 319   | Incoming fax                                            | | 320   | Outgoing fax                                            | | 321   | Semi-private space                                      | | 322   | Loading dock                                            | | 323   | Baby kit                                                | | 324   | Children's breakfast                                    | | 325   | Cloakroom service                                       | | 326   | Coffee lounge                                           | | 327   | Events ticket service                                   | | 328   | Late check-in                                           | | 329   | Limited parking                                         | | 330   | Outdoor summer bar/café                                 | | 331   | No parking available                                    | | 332   | Beer garden                                             | | 333   | Garden lounge bar                                       | | 334   | Summer terrace                                          | | 335   | Winter terrace                                          | | 336   | Roof terrace                                            | | 337   | Beach bar                                               | | 338   | Helicopter service                                      | | 339   | Ferry                                                   | | 340   | Tapas bar                                               | | 341   | Café bar                                                | | 342   | Snack bar                                               | | 343   | Guestroom wired internet                                | | 344   | Guestroom wireless internet                             | | 345   | Fitness center                                          | | 348   | Health and beauty services                              | | 349   | Mobile/Digital Check-in                                 | | 350   | Mobile/Digital Check-out                                | | 351   | Choose a room                                           | | 5000  | Breakfast in the room                                   | | 5001  | Public transport tickets                                | | 5002  | Bikes available (free)                                  | | 5003  | Outdoor furniture                                       | | 5004  | Outdoor fireplace                                       | | 5005  | Garden                                                  | | 5006  | Terrace                                                 | | 5007  | Sun terrace                                             | | 5008  | Chapel/shrine                                           | | 5009  | Shared lounge/TV area                                   | | 5010  | Ironing service                                         | | 5011  | Trouser press                                           | | 5012  | Designated smoking area                                 | | 5013  | Pet basket                                              | | 5014  | Pet bowls                                               | | 5015  | Beach                                                   | | 5016  | Bowling                                                 | | 5017  | Darts                                                   | | 5018  | Fishing                                                 | | 5020  | Hiking                                                  | | 5021  | Minigolf                                                | | 5022  | Snorkeling                                              | | 5023  | Squash                                                  | | 5024  | Windsurfing                                             | | 5025  | Billiard                                                | | 5026  | Table tennis                                            | | 5027  | Canoeing                                                | | 5028  | Ski-to-door access                                      | | 5029  | Diving                                                  | | 5030  | Tennis equipment                                        | | 5031  | Badminton equipment                                     | | 5032  | Cycling                                                 | | 5033  | Ski storage                                             | | 5034  | Ski school                                              | | 5035  | Ski equipment hire (on site)                            | | 5036  | Ski pass vendor                                         | | 5037  | Private beach area                                      | | 5039  | Rooms/Facilities for Disabled                           | | 5040  | Hair dresser-beautician                                 | | 5041  | Family Rooms                                            | | 5042  | Viproom facilities                                      | | 5043  | Bridal Suite                                            | | 5044  | Spa & Wellness Centre                                   | | 5045  | Karaoke                                                 | | 5046  | Soundproof-rooms                                        | | 5047  | Packed Lunches                                          | | 5048  | Ticket service                                          | | 5049  | Entertainment Staff                                     | | 5050  | Private Check-in/Check-out                              | | 5051  | Special Diet Menus (on request)                         | | 5052  | Vending Machine (drinks)                                | | 5053  | Hot Spring Bath                                         | | 5054  | Kids' club                                              | | 5055  | Minimarket on site                                      | | 5056  | Water park                                              | | 5057  | Adult only                                              | | 5058  | Open-air bath                                           | | 5059  | Public bath                                             | | 5060  | Water slide                                             | | 5061  | Board games/puzzles                                     | | 5062  | Book/DVD/Music library for children                     | | 5063  | Indoor play area                                        | | 5064  | Kids' outdoor play equipment                            | | 5065  | Baby safety gates                                       | | 5066  | Children television networks                            | | 5067  | Kid meals                                               | | 5068  | Kid-friendly buffet                                     | | 5069  | Pool towels                                             | | 5070  | Wine/Champagne                                          | | 5071  | Bottle of water                                         | | 5072  | Fruits                                                  | | 5073  | Chocolate/Cookies                                       | | 5074  | Strollers                                               | | 5075  | On-site coffee house                                    | | 5076  | Sun loungers or beach chairs                            | | 5077  | Sun umbrellas                                           | | 5078  | Picnic area                                             | | 5079  | Beauty Services                                         | | 5080  | Spa Facilities                                          | | 5081  | Steam room                                              | | 5082  | Spa lounge/relaxation area                              | | 5083  | Foot bath                                               | | 5084  | Spa/wellness packages                                   | | 5085  | Massage chair                                           | | 5086  | Fitness                                                 | | 5087  | Yoga classes                                            | | 5088  | Fitness classes                                         | | 5089  | Personal trainer                                        | | 5090  | Fitness/spa locker rooms                                | | 5091  | Kids pool                                               | | 5092  | Shuttle Service                                         | | 5093  | Temporary art galleries                                 | | 5094  | Pub crawls                                              | | 5095  | Stand-up comedy                                         | | 5096  | Movie nights                                            | | 5097  | Walking tours                                           | | 5098  | Bike tours                                              | | 5099  | Themed dinner nights                                    | | 5100  | Happy hour                                              | | 5101  | Tour or class about local culture                       | | 5102  | Cooking class                                           | | 5103  | Live music/performance                                  | | 5104  | Live sports events (broadcast)                          | | 5105  | Archery                                                 | | 5106  | Aerobics                                                | | 5107  | Bingo                                                   | | 5108  | Ski Shuttle                                             | | 5109  | Outdoor Swimming Pool (all year)                        | | 5110  | Outdoor Swimming Pool (seasonal)                        | | 5111  | Indoor Swimming Pool (all year)                         | | 5112  | Indoor Swimming Pool (seasonal)                         | | 5113  | Swimming pool toys                                      | | 5114  | Rooftop pool                                            | | 5115  | Infinity pool                                           | | 5116  | Pool with view                                          | | 5117  | Salt-water pool                                         | | 5118  | Plunge pool                                             | | 5119  | Pool bar                                                | | 5120  | Shallow end pool                                        | | 5121  | Pool cover                                              | | 5122  | Fence around pool                                       | | 5123  | Airport Shuttle (surcharge)                             | | 5124  | Property is wheel chair accessible                      | | 5125  | Toilet with grab rails                                  | | 5126  | Higher level toilet                                     | | 5127  | Low bathroom sink                                       | | 5128  | Bathroom emergency pull cord                            | | 5129  | Visual aids: Braille                                    | | 5130  | Visual aids: Tactile Signs                              | | 5131  | Auditory Guidance                                       | | 5132  | Back massage                                            | | 5133  | Neck massage                                            | | 5134  | Foot massage                                            | | 5135  | Couples massage                                         | | 5136  | Head massage                                            | | 5137  | Hand massage                                            | | 5138  | Full body massage                                       | | 5139  | Facial treatments                                       | | 5140  | Waxing services                                         | | 5141  | Make up services                                        | | 5142  | Hair treatments                                         | | 5143  | Manicure                                                | | 5144  | Pedicure                                                | | 5145  | Hair cut                                                | | 5146  | Hair colouring                                          | | 5147  | Hair styling                                            | | 5148  | Body Treatments                                         | | 5149  | Body scrub                                              | | 5150  | Body wrap                                               | | 5151  | Light therapy                                           | | 5152  | Shuttle Service (free)                                  | | 5153  | Shuttle Service (surcharge)                             | | 5154  | Swimming pool                                           | | 5156  | No Single-Use Toiletries                                | | 5157  | Towels Changed Upon Request                             | | 5158  | 24-hour security                                        | | 5159  | Security alarm                                          | | 5160  | Smoke alarms                                            | | 5161  | CCTV in common areas                                    | | 5162  | CCTV outside property                                   | | 5163  | Fire extinguishers                                      | | 5164  | Key access                                              | | 5165  | Key card access                                         | | 5166  | Carbon monoxide detector                                | | 5167  | Carbon monoxide source                                  | | 5168  | No plastic stirrers                                     | | 5169  | No plastic straws                                       | | 5170  | No plastic cups                                         | | 5171  | No plastic bottles for water                            | | 5172  | No plastic bottles for non-water                        | | 5173  | No plastic cutlery                                      | | 5174  | Keycard for room electricity                            | | 5175  | Opt-out from daily room cleaning                        | | 5176  | Refillable water stations                               | | 5177  | Bike rental                                             | | 5178  | Bike parking                                            | | 6000  | Lunch                                                   | | 6001  | Dinner                                                  | | 90001 | Renewable energy                                        |  ### mealPlanCode  | Code  | Name                          | | ----- | ----------------------------- | | 0     | (NONE)                        | | 1     | All inclusive                 | | 2     | American                      | | 3     | Bed & breakfast               | | 4     | Buffet breakfast              | | 5     | Caribbean breakfast           | | 6     | Continental breakfast         | | 7     | English breakfast             | | 8     | European plan                 | | 9     | Family plan                   | | 10    | Full board                    | | 11    | Full breakfast                | | 12    | Half board                    | | 14    | Room only                     | | 15    | Self catering                 | | 16    | Bermuda                       | | 17    | Dinner bed and breakfast plan | | 18    | Family American               | | 19    | Breakfast                     | | 20    | Modified                      | | 21    | Lunch                         | | 22    | Dinner                        | | 23    | Breakfast & lunch             | | 24    | Lunch & Dinner                | | 90001 | 3/4 Plan                      |  ### typeCode  | Code | Name                          | | ---- | ----------------------------- | | 1    | All suite                     | | 2    | All-Inclusive resort          | | 3    | Apartment                     | | 4    | Bed and breakfast             | | 5    | Cabin or bungalow             | | 6    | Campground                    | | 7    | Chalet                        | | 8    | Condominium                   | | 9    | Conference center             | | 10   | Corporate                     | | 11   | Corporate business transient  | | 12   | Cruise                        | | 13   | Extended stay                 | | 14   | Ferry                         | | 15   | Guest farm                    | | 16   | Guest house limited service   | | 17   | Health spa                    | | 18   | Holiday resort                | | 19   | Hostel                        | | 20   | Hotel                         | | 21   | Inn                           | | 22   | Lodge                         | | 23   | Meeting resort                | | 24   | Meeting/Convention            | | 25   | Mobile-home                   | | 26   | Monastery                     | | 27   | Motel                         | | 28   | Ranch                         | | 29   | Residential apartment         | | 30   | Resort                        | | 31   | Sailing ship                  | | 32   | Self catering accommodation   | | 33   | Tent                          | | 34   | Vacation home                 | | 35   | Villa                         | | 36   | Wildlife reserve              | | 37   | Castle                        | | 38   | Convention Network Property   | | 39   | Golf                          | | 40   | Pension                       | | 41   | Ski                           | | 42   | Spa                           | | 43   | Time share                    | | 44   | Boatel                        | | 45   | Boutique                      | | 46   | Efficiency/studio             | | 47   | Full service                  | | 48   | Historical                    | | 49   | Limited service               | | 50   | Recreational vehicle park     | | 51   | Charm hotel                   | | 52   | Manor                         | | 53   | Vacation rental               | | 54   | Economy                       | | 55   | Midscale                      | | 56   | Upscale                       | | 57   | Luxury                        | | 58   | Union                         | | 59   | Leisure                       | | 60   | Wholesale                     | | 61   | Transient                     | | 62   | Other                         | | 5000 | ApartHotel                    | | 5001 | Riad                          | | 5002 | Ryokan                        | | 5003 | Love Hotel                    | | 5004 | Homestay                      | | 5005 | Japanese-style Business Hotel | | 5006 | Holiday Home                  | | 5007 | Country house                 | | 5008 | Capsule Hotel                 | | 5009 | Holiday Park                  |  ### unitTypeCode  | Code | Name             | | ---- | ---------------- | | 1    | Apartment        | | 4    | Quadruple        | | 5    | Suite            | | 7    | Triple           | | 8    | Twin             | | 9    | Double           | | 10   | Single           | | 12   | Studio           | | 13   | Family           | | 24   | Twin/Double      | | 25   | Dormitory room   | | 26   | Bed in Dormitory | | 27   | Bungalow         | | 28   | Chalet           | | 29   | Holiday home     | | 31   | Villa            | | 32   | Mobile home      | | 33   | Tent             |  ### unitAmenityCode  | Code  | Name                                                         | | ----- | ------------------------------------------------------------ | | 1     | Adjoining rooms                                              | | 2     | Air conditioning                                             | | 3     | Alarm clock                                                  | | 4     | All news channel                                             | | 5     | AM/FM radio                                                  | | 6     | Baby listening device                                        | | 7     | Balcony/Lanai/Terrace                                        | | 8     | Barbeque grills                                              | | 9     | Bath tub with spray jets                                     | | 10    | Bathrobe                                                     | | 11    | Bathroom amenities                                           | | 12    | Bathroom telephone                                           | | 13    | Bathtub                                                      | | 14    | Bathtub only                                                 | | 15    | Bathtub/shower combination                                   | | 16    | Bidet                                                        | | 17    | Bottled water                                                | | 18    | Cable television                                             | | 19    | Coffee/Tea maker                                             | | 20    | Color television                                             | | 21    | Computer                                                     | | 22    | Connecting rooms                                             | | 23    | Converters/ Voltage adaptors                                 | | 24    | Copier                                                       | | 25    | Cordless phone                                               | | 26    | Cribs                                                        | | 27    | Data port                                                    | | 28    | Desk                                                         | | 29    | Desk with lamp                                               | | 30    | Dining guide                                                 | | 31    | Direct dial phone number                                     | | 32    | Dishwasher                                                   | | 33    | Double beds                                                  | | 34    | Dual voltage outlet                                          | | 35    | Electrical current voltage                                   | | 36    | Ergonomic chair                                              | | 37    | Extended phone cord                                          | | 38    | Fax machine                                                  | | 39    | Fire alarm                                                   | | 40    | Fire alarm with light                                        | | 41    | Fireplace                                                    | | 42    | Free toll free calls                                         | | 43    | Free calls                                                   | | 44    | Free credit card access calls                                | | 45    | Free local calls                                             | | 46    | Free movies/video                                            | | 47    | Full kitchen                                                 | | 48    | Grab bars in bathroom                                        | | 49    | Grecian tub                                                  | | 50    | Hairdryer                                                    | | 51    | High speed internet connection                               | | 52    | Interactive web TV                                           | | 53    | International direct dialing                                 | | 54    | Internet access                                              | | 55    | Iron                                                         | | 56    | Ironing board                                                | | 57    | Whirpool                                                     | | 58    | King bed                                                     | | 59    | Kitchen                                                      | | 60    | Kitchen supplies                                             | | 61    | Kitchenette                                                  | | 62    | Knock light                                                  | | 63    | Laptop                                                       | | 64    | Large desk                                                   | | 65    | Large work area                                              | | 66    | Laundry basket/clothes hamper                                | | 67    | Loft                                                         | | 68    | Microwave                                                    | | 69    | Minibar                                                      | | 70    | Modem                                                        | | 71    | Modem jack                                                   | | 72    | Multi-line phone                                             | | 73    | Newspaper                                                    | | 74    | Non-smoking                                                  | | 75    | Notepads                                                     | | 76    | Office supplies                                              | | 77    | Oven                                                         | | 78    | Pay per view movies on TV                                    | | 79    | Pens                                                         | | 80    | Phone in bathroom                                            | | 81    | Plates and bowls                                             | | 82    | Pots and pans                                                | | 83    | Prayer mats                                                  | | 84    | Printer                                                      | | 85    | Private bathroom                                             | | 86    | Queen bed                                                    | | 87    | Recliner                                                     | | 88    | Refrigerator                                                 | | 89    | Refrigerator with ice maker                                  | | 90    | Remote control television                                    | | 91    | Rollaway bed                                                 | | 92    | Safe                                                         | | 93    | Scanner                                                      | | 94    | Separate closet                                              | | 95    | Separate modem line available                                | | 96    | Shoe polisher                                                | | 97    | Shower only                                                  | | 98    | Silverware/utensils                                          | | 99    | Sitting area                                                 | | 100   | Smoke detectors                                              | | 101   | Smoking                                                      | | 102   | Sofa bed                                                     | | 103   | Speaker phone                                                | | 104   | Stereo                                                       | | 105   | Stove                                                        | | 106   | Tape recorder                                                | | 107   | Telephone                                                    | | 108   | Telephone for hearing impaired                               | | 109   | Telephones with message light                                | | 110   | Toaster oven                                                 | | 111   | Trouser/Pant press                                           | | 112   | Turn down service                                            | | 113   | Twin bed                                                     | | 114   | Vaulted ceilings                                             | | 115   | VCR movies                                                   | | 116   | VCR player                                                   | | 117   | Video games                                                  | | 118   | Voice mail                                                   | | 119   | Wake-up calls                                                | | 120   | Water closet                                                 | | 121   | Water purification system                                    | | 122   | Wet bar                                                      | | 123   | Wireless internet connection                                 | | 124   | Wireless keyboard                                            | | 125   | Adaptor available for telephone PC use                       | | 126   | Air conditioning individually controlled in room             | | 127   | Bathtub &whirlpool separate                                  | | 128   | Telephone with data ports                                    | | 129   | CD player                                                    | | 130   | Complimentary local calls time limit                         | | 131   | Extra person charge for rollaway use                         | | 132   | Down/feather pillows                                         | | 133   | Desk with electrical outlet                                  | | 134   | ESPN available                                               | | 135   | Foam pillows                                                 | | 136   | HBO available                                                | | 137   | High ceilings                                                | | 138   | Marble bathroom                                              | | 139   | List of movie channels available                             | | 140   | Pets allowed                                                 | | 141   | Oversized bathtub                                            | | 142   | Shower                                                       | | 143   | Sink in-room                                                 | | 144   | Soundproofed room                                            | | 145   | Storage space                                                | | 146   | Tables and chairs                                            | | 147   | Two-line phone                                               | | 148   | Walk-in closet                                               | | 149   | Washer/dryer                                                 | | 150   | Weight scale                                                 | | 151   | Welcome gift                                                 | | 152   | Spare electrical outlet available at desk                    | | 153   | Non-refundable charge for pets                               | | 154   | Refundable deposit for pets                                  | | 155   | Separate tub and shower                                      | | 156   | Entrance type to guest room                                  | | 157   | Ceiling fan                                                  | | 158   | CNN available                                                | | 159   | Electrical adaptors available                                | | 160   | Buffet breakfast                                             | | 161   | Accessible room                                              | | 162   | Closets in room                                              | | 163   | DVD player                                                   | | 164   | Mini-refrigerator                                            | | 165   | Separate line billing for multi-line phone                   | | 166   | Self-controlled heating/cooling system                       | | 167   | Toaster                                                      | | 168   | Analog data port                                             | | 169   | Collect calls                                                | | 170   | International calls                                          | | 171   | Carrier access                                               | | 172   | Interstate calls                                             | | 173   | Intrastate calls                                             | | 174   | Local calls                                                  | | 175   | Long distance calls                                          | | 176   | Operator-assisted calls                                      | | 177   | Credit card access calls                                     | | 178   | Calling card calls                                           | | 179   | Toll free calls                                              | | 180   | Universal AC/DC adaptors                                     | | 181   | Bathtub seat                                                 | | 182   | Canopy/poster bed                                            | | 183   | Cups/glassware                                               | | 184   | Entertainment center                                         | | 185   | Family/oversized room                                        | | 186   | Hypoallergenic bed                                           | | 187   | Hypoallergenic pillows                                       | | 188   | Lamp                                                         | | 189   | Meal included: breakfast                                     | | 190   | Meal included: continental breakfast                         | | 191   | Meal included: dinner                                        | | 192   | Meal included: lunch                                         | | 193   | Shared bathroom                                              | | 194   | Telephone TDD/Textphone                                      | | 195   | Water bed                                                    | | 196   | Extra adult charge                                           | | 197   | Extra child charge                                           | | 198   | Extra child charge for rollaway use                          | | 199   | Meal included: full American breakfast                       | | 200   | Futon                                                        | | 201   | Murphy bed                                                   | | 202   | Tatami mats                                                  | | 203   | Single bed                                                   | | 204   | Annex room                                                   | | 205   | Free newspaper                                               | | 206   | Honeymoon suites                                             | | 207   | Complimentary high speed internet in room                    | | 208   | Maid service                                                 | | 209   | PC hook-up in room                                           | | 210   | Satellite television                                         | | 211   | VIP rooms                                                    | | 212   | Cell phone recharger                                         | | 213   | DVR player                                                   | | 214   | iPod docking station                                         | | 215   | Media center                                                 | | 216   | Plug & play panel                                            | | 217   | Satellite radio                                              | | 218   | Video on demand                                              | | 219   | Exterior corridors                                           | | 220   | Gulf view                                                    | | 221   | Accessible room                                              | | 222   | Interior corridors                                           | | 223   | Mountain view                                                | | 224   | Ocean view                                                   | | 225   | High speed internet access fee                               | | 226   | High speed wireless                                          | | 227   | Premium movie channels                                       | | 228   | Slippers                                                     | | 229   | First nighters' kit                                          | | 230   | Chair provided with desk                                     | | 231   | Pillow top mattress                                          | | 232   | Feather bed                                                  | | 233   | Duvet                                                        | | 234   | Luxury linen type                                            | | 235   | International channels                                       | | 236   | Pantry                                                       | | 237   | Dish-cleaning supplies                                       | | 238   | Double vanity                                                | | 239   | Lighted makeup mirror                                        | | 240   | Upgraded bathroom amenities                                  | | 241   | VCR player available at front desk                           | | 242   | Instant hot water                                            | | 243   | Outdoor space                                                | | 244   | Hinoki tub                                                   | | 245   | Private pool                                                 | | 246   | High Definition (HD) Flat Panel Television - 32 inches or greater | | 247   | Room windows open                                            | | 248   | Bedding type unknown or unspecified                          | | 249   | Full bed                                                     | | 250   | Round bed                                                    | | 251   | TV                                                           | | 252   | Child rollaway                                               | | 253   | DVD player available at front desk                           | | 254   | Video game player:                                           | | 255   | Video game player available at front desk                    | | 256   | Dining room seats                                            | | 257   | Full size mirror                                             | | 258   | Mobile/cellular phones                                       | | 259   | Movies                                                       | | 260   | Multiple closets                                             | | 261   | Plates/glassware                                             | | 262   | Safe large enough to accommodate a laptop                    | | 263   | Bed linen thread count                                       | | 264   | Blackout curtain                                             | | 265   | Bluray player                                                | | 266   | Device with mp3                                              | | 267   | No adult channels or adult channel lock                      | | 268   | Non-allergenic room                                          | | 269   | Pillow type                                                  | | 270   | Seating area with sofa/chair                                 | | 271   | Separate toilet area                                         | | 272   | Web enabled                                                  | | 273   | Widescreen TV                                                | | 274   | Other data connection                                        | | 275   | Phoneline billed separately                                  | | 276   | Separate tub or shower                                       | | 277   | Video games                                                  | | 278   | Roof ventilator                                              | | 279   | Children's playpen                                           | | 280   | Plunge pool                                                  | | 281   | DVD movies                                                   | | 282   | Air filtration                                               | | 283   | Exercise Equipment in Room                                   | | 5001  | Coffee/Tea maker                                             | | 5002  | Internet facilities                                          | | 5003  | Mini-bar                                                     | | 5004  | Shower                                                       | | 5005  | Bath                                                         | | 5006  | Safe Deposit Box                                             | | 5007  | Pay-per-view Channels                                        | | 5008  | TV                                                           | | 5009  | Telephone                                                    | | 5010  | Fax                                                          | | 5011  | Airconditioning                                              | | 5012  | Hair Dryer                                                   | | 5013  | Wake Up Service/Alarm-clock                                  | | 5014  | Hot Tub                                                      | | 5015  | Clothing Iron                                                | | 5016  | Kitchenette                                                  | | 5017  | Balcony                                                      | | 5018  | Trouser Press                                                | | 5019  | Bath-robe                                                    | | 5020  | Spa Bath                                                     | | 5021  | Radio                                                        | | 5022  | Refrigerator                                                 | | 5023  | Desk                                                         | | 5024  | Shared Bathroom                                              | | 5025  | Ironing facilities                                           | | 5026  | Seating area                                                 | | 5027  | Free Toiletries                                              | | 5028  | DVD-Player                                                   | | 5029  | CD-Player                                                    | | 5030  | Fan                                                          | | 5031  | Toilet                                                       | | 5032  | Microwave                                                    | | 5033  | Dishwasher                                                   | | 5034  | Washing machine                                              | | 5035  | Video                                                        | | 5036  | Video Games                                                  | | 5037  | Patio                                                        | | 5038  | Bathroom                                                     | | 5039  | Extra long beds (> 2 meter)                                  | | 5040  | Heating                                                      | | 5041  | Dressing room                                                | | 5042  | Guest toilet                                                 | | 5043  | Slippers                                                     | | 5044  | Satellite Channels                                           | | 5045  | Kitchen                                                      | | 5046  | Wireless internet                                            | | 5068  | Cable channels                                               | | 5069  | Bath or Shower                                               | | 5070  | Carpeted Floor                                               | | 5071  | Fireplace                                                    | | 5072  | Additional Toilet                                            | | 5073  | Interconnecting Room(s) available                            | | 5074  | Laptop Safe Box                                              | | 5075  | Flat-screen TV                                               | | 5076  | Private Entrance                                             | | 5077  | Sofa                                                         | | 5079  | Soundproofing                                                | | 5080  | Tiled / Marble floor                                         | | 5081  | View                                                         | | 5082  | Wooden / Parquet floor                                       | | 5083  | Wake Up Service                                              | | 5084  | Alarm Clock                                                  | | 5085  | Dining Area                                                  | | 5086  | Electric Kettle                                              | | 5087  | Executive Lounge Access                                      | | 5088  | iPod Docking Station                                         | | 5089  | Kitchenware                                                  | | 5090  | Mosquito Net                                                 | | 5091  | Towels/Linens at surcharge                                   | | 5092  | Sauna                                                        | | 5093  | Private Pool                                                 | | 5094  | Tumble dryer (machine)                                       | | 5095  | Wardrobe/Closet                                              | | 5096  | Oven                                                         | | 5097  | Stove                                                        | | 5098  | Toaster                                                      | | 5099  | Barbecue                                                     | | 5100  | Bidet                                                        | | 5101  | Computer                                                     | | 5102  | iPad                                                         | | 5103  | Game Console                                                 | | 5104  | Game Console - Xbox 360                                      | | 5105  | Game Console - PS2                                           | | 5106  | Game Console - PS3                                           | | 5107  | Game Console - Nintendo Wii                                  | | 5108  | Sea View                                                     | | 5109  | Lake View                                                    | | 5110  | Garden View                                                  | | 5111  | Pool View                                                    | | 5112  | Mountain View                                                | | 5113  | Landmark View                                                | | 5114  | Laptop                                                       | | 5115  | Allergy-Free                                                 | | 5116  | Cleaning products                                            | | 5117  | Electric blankets                                            | | 5118  | Additional Bathroom                                          | | 5119  | Blu-ray player                                               | | 5120  | Coffee Machine                                               | | 5121  | City View                                                    | | 5122  | River View                                                   | | 5123  | Terrace                                                      | | 5124  | Towels                                                       | | 5125  | Linen                                                        | | 5126  | Dining table                                                 | | 5127  | Children highchair                                           | | 5129  | Outdoor furniture                                            | | 5130  | Outdoor dining area                                          | | 5131  | Entire property on ground floor                              | | 5132  | Upper floor reachable by lift                                | | 5133  | Upper floor reachable by stairs only                         | | 5134  | Entire unit wheelchair accessible                            | | 5135  | Detached                                                     | | 5136  | Semi-detached                                                | | 5137  | Private flat in block of flats                               | | 5138  | Clothes Rack                                                 | | 5139  | Rollaway bed                                                 | | 5140  | Clothes drying rack                                          | | 5141  | Toilet paper                                                 | | 5142  | Child safety socket covers                                   | | 5143  | Board games/puzzles                                          | | 5144  | Book/DVD/Music library for children                          | | 5145  | Baby safety gates                                            | | 5146  | Sofa bed                                                     | | 5147  | Toilet with grab rails                                       | | 5148  | Adapted bath                                                 | | 5149  | Roll in shower                                               | | 5150  | Walk in shower                                               | | 5151  | Higher level toilet                                          | | 5152  | Low bathroom sink                                            | | 5153  | Bathroom emergency pull cord                                 | | 5154  | Shower chair                                                 | | 5157  | Rooftop pool                                                 | | 5158  | Infinity pool                                                | | 5159  | Pool with view                                               | | 5160  | Heated pool                                                  | | 5161  | Salt-water pool                                              | | 5162  | Plunge pool                                                  | | 5163  | Pool towels                                                  | | 5164  | Shallow end                                                  | | 5165  | Pool cover                                                   | | 5166  | Wine/champagne                                               | | 5167  | Bottle of water                                              | | 5168  | Fruits                                                       | | 5169  | Chocolate/cookies                                            | | 5170  | Trash cans                                                   | | 5171  | Wine glasses                                                 | | 5172  | Game console - Xbox One                                      | | 5173  | Game console - Wii U                                         | | 5174  | Game console - PS4                                           | | 5175  | Children crib/cots                                           | | 5176  | Toothbrush                                                   | | 5177  | Shampoo                                                      | | 5178  | Conditioner                                                  | | 5179  | Body soap                                                    | | 5180  | Shower cap                                                   | | 5181  | Pajamas                                                      | | 5182  | Yukata                                                       | | 5184  | Socket near the bed                                          | | 5185  | Adapter                                                      | | 5186  | Feather pillow                                               | | 5187  | Non-feather pillow                                           | | 5188  | Hypoallergenic pillow                                        | | 5189  | Accessible by Lift                                           | | 5190  | Inner courtyard view                                         | | 5191  | Quiet street view                                            | | 5196  | Portable Wifi                                                | | 5198  | Smartphone                                                   | | 5199  | Streaming service (such as Netflix)                          | | 5200  | Lockers                                                      | | 5201  | Fire alarms or smoke detectors                               | | 5202  | Fire extinguishers                                           | | 5203  | Metal keys access                                            | | 5204  | Electronic key card access                                   | | 5205  | Reading light                                                | | 5206  | Earplugs                                                     | | 5207  | Private curtain                                              | | 5211  | Carbon monoxide detector                                     | | 5212  | Carbon monoxide source                                       | | 90001 | Bread-bun delivery                                           | | 90002 | Breakfast delivery                                           | | 90003 | Grocery delivery service                                     | | 90004 | Beach chair or roofed wicker beach chair                     | | 90005 | Shared kitchen                                               | | 90006 | Bunk bed                                                     | | 90007 | Levee view                                                   | | 90008 | Pay television                                               | | 90009 | Extractor hood                                               | | 90010 | Vacuum cleaner                                               | | 90011 | Separated bedrooms                                           |
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@lodgea.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * V1PropertyGetPost200ResponsePropertyGeoEn Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1PropertyGetPost200ResponsePropertyGeoEn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_property_get_post_200_response_property_geo_en';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'location' => '\OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyGeoDeLocation',
        'formatted_address' => 'string',
        'place_id' => 'string',
        'locality' => 'string',
        'administrative_area_level_3' => 'string',
        'administrative_area_level_1' => 'string',
        'state_code' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'postal_code' => 'string',
        'language' => 'string',
        'natural_feature' => 'string',
        'establishment' => 'string',
        'sublocality' => 'string',
        'sublocality_level_1' => 'string',
        'street_number' => 'string',
        'route' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'location' => null,
        'formatted_address' => null,
        'place_id' => null,
        'locality' => null,
        'administrative_area_level_3' => null,
        'administrative_area_level_1' => null,
        'state_code' => null,
        'country' => null,
        'country_code' => null,
        'postal_code' => null,
        'language' => null,
        'natural_feature' => null,
        'establishment' => null,
        'sublocality' => null,
        'sublocality_level_1' => null,
        'street_number' => null,
        'route' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'location' => 'location',
        'formatted_address' => 'formatted_address',
        'place_id' => 'place_id',
        'locality' => 'locality',
        'administrative_area_level_3' => 'administrative_area_level_3',
        'administrative_area_level_1' => 'administrative_area_level_1',
        'state_code' => 'state_code',
        'country' => 'country',
        'country_code' => 'country_code',
        'postal_code' => 'postal_code',
        'language' => 'language',
        'natural_feature' => 'natural_feature',
        'establishment' => 'establishment',
        'sublocality' => 'sublocality',
        'sublocality_level_1' => 'sublocality_level_1',
        'street_number' => 'street_number',
        'route' => 'route'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'formatted_address' => 'setFormattedAddress',
        'place_id' => 'setPlaceId',
        'locality' => 'setLocality',
        'administrative_area_level_3' => 'setAdministrativeAreaLevel3',
        'administrative_area_level_1' => 'setAdministrativeAreaLevel1',
        'state_code' => 'setStateCode',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode',
        'language' => 'setLanguage',
        'natural_feature' => 'setNaturalFeature',
        'establishment' => 'setEstablishment',
        'sublocality' => 'setSublocality',
        'sublocality_level_1' => 'setSublocalityLevel1',
        'street_number' => 'setStreetNumber',
        'route' => 'setRoute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'formatted_address' => 'getFormattedAddress',
        'place_id' => 'getPlaceId',
        'locality' => 'getLocality',
        'administrative_area_level_3' => 'getAdministrativeAreaLevel3',
        'administrative_area_level_1' => 'getAdministrativeAreaLevel1',
        'state_code' => 'getStateCode',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode',
        'language' => 'getLanguage',
        'natural_feature' => 'getNaturalFeature',
        'establishment' => 'getEstablishment',
        'sublocality' => 'getSublocality',
        'sublocality_level_1' => 'getSublocalityLevel1',
        'street_number' => 'getStreetNumber',
        'route' => 'getRoute'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['location'] = $data['location'] ?? null;
        $this->container['formatted_address'] = $data['formatted_address'] ?? null;
        $this->container['place_id'] = $data['place_id'] ?? null;
        $this->container['locality'] = $data['locality'] ?? null;
        $this->container['administrative_area_level_3'] = $data['administrative_area_level_3'] ?? null;
        $this->container['administrative_area_level_1'] = $data['administrative_area_level_1'] ?? null;
        $this->container['state_code'] = $data['state_code'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['natural_feature'] = $data['natural_feature'] ?? null;
        $this->container['establishment'] = $data['establishment'] ?? null;
        $this->container['sublocality'] = $data['sublocality'] ?? null;
        $this->container['sublocality_level_1'] = $data['sublocality_level_1'] ?? null;
        $this->container['street_number'] = $data['street_number'] ?? null;
        $this->container['route'] = $data['route'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets location
     *
     * @return \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyGeoDeLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyGeoDeLocation|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets formatted_address
     *
     * @return string|null
     */
    public function getFormattedAddress()
    {
        return $this->container['formatted_address'];
    }

    /**
     * Sets formatted_address
     *
     * @param string|null $formatted_address formatted_address
     *
     * @return self
     */
    public function setFormattedAddress($formatted_address)
    {
        $this->container['formatted_address'] = $formatted_address;

        return $this;
    }

    /**
     * Gets place_id
     *
     * @return string|null
     */
    public function getPlaceId()
    {
        return $this->container['place_id'];
    }

    /**
     * Sets place_id
     *
     * @param string|null $place_id place_id
     *
     * @return self
     */
    public function setPlaceId($place_id)
    {
        $this->container['place_id'] = $place_id;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets administrative_area_level_3
     *
     * @return string|null
     */
    public function getAdministrativeAreaLevel3()
    {
        return $this->container['administrative_area_level_3'];
    }

    /**
     * Sets administrative_area_level_3
     *
     * @param string|null $administrative_area_level_3 administrative_area_level_3
     *
     * @return self
     */
    public function setAdministrativeAreaLevel3($administrative_area_level_3)
    {
        $this->container['administrative_area_level_3'] = $administrative_area_level_3;

        return $this;
    }

    /**
     * Gets administrative_area_level_1
     *
     * @return string|null
     */
    public function getAdministrativeAreaLevel1()
    {
        return $this->container['administrative_area_level_1'];
    }

    /**
     * Sets administrative_area_level_1
     *
     * @param string|null $administrative_area_level_1 administrative_area_level_1
     *
     * @return self
     */
    public function setAdministrativeAreaLevel1($administrative_area_level_1)
    {
        $this->container['administrative_area_level_1'] = $administrative_area_level_1;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string|null $state_code state_code
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets natural_feature
     *
     * @return string|null
     */
    public function getNaturalFeature()
    {
        return $this->container['natural_feature'];
    }

    /**
     * Sets natural_feature
     *
     * @param string|null $natural_feature natural_feature
     *
     * @return self
     */
    public function setNaturalFeature($natural_feature)
    {
        $this->container['natural_feature'] = $natural_feature;

        return $this;
    }

    /**
     * Gets establishment
     *
     * @return string|null
     */
    public function getEstablishment()
    {
        return $this->container['establishment'];
    }

    /**
     * Sets establishment
     *
     * @param string|null $establishment establishment
     *
     * @return self
     */
    public function setEstablishment($establishment)
    {
        $this->container['establishment'] = $establishment;

        return $this;
    }

    /**
     * Gets sublocality
     *
     * @return string|null
     */
    public function getSublocality()
    {
        return $this->container['sublocality'];
    }

    /**
     * Sets sublocality
     *
     * @param string|null $sublocality sublocality
     *
     * @return self
     */
    public function setSublocality($sublocality)
    {
        $this->container['sublocality'] = $sublocality;

        return $this;
    }

    /**
     * Gets sublocality_level_1
     *
     * @return string|null
     */
    public function getSublocalityLevel1()
    {
        return $this->container['sublocality_level_1'];
    }

    /**
     * Sets sublocality_level_1
     *
     * @param string|null $sublocality_level_1 sublocality_level_1
     *
     * @return self
     */
    public function setSublocalityLevel1($sublocality_level_1)
    {
        $this->container['sublocality_level_1'] = $sublocality_level_1;

        return $this;
    }

    /**
     * Gets street_number
     *
     * @return string|null
     */
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number
     *
     * @param string|null $street_number street_number
     *
     * @return self
     */
    public function setStreetNumber($street_number)
    {
        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets route
     *
     * @return string|null
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param string|null $route route
     *
     * @return self
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


