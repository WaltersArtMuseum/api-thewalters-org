Walters Art Museum Collections API (Beta)
=======================================================================================================================

## Get Objects by Collection

A collection is a group of [museum objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md), i.e. pieces of art, artifacts, or similar items within the Walters Art Museum. Collections at the Walters are grouped by primarily by culture and sometimes by date. For example, the Asian Art collection contains items such as paintings, sculptures and ceramics that were made in or around the Asian continent. Collections are one of the [5 objects you can get with the Walters API](https://github.com/WaltersArtMuseum/walters-api#overview). 

This is one of 2 requests you can use to get museum collections data:
- [GET v1/collections](https://github.com/WaltersArtMuseum/walters-api/blob/master/collections-get.md) Get museum objects via a number of parameters.
- [GET v1/objects/{id}/images](https://github.com/WaltersArtMuseum/walters-api/blob/master/collections-objects.md) Get museum objects within a museum collection.

## Request

The `GET v1/collections/{id}/objects` request will get museum objects associated with a museum collection. The request accepts a number of parameters, listed below.


## Parameters

Name | Type | Description
-----|------|--------------
`apikey` | `string` | This parameter is required to be defined in every API request. Please [obtain an API key](http://api.thewalters.org/) and include it in your API requests as follows: `http://api.thewalters.org/v1/objects?apikey=<your_api_key>`. Be sure to replace `<your_api_key>` with your actual key. 
`id` | `integer` | Define this parameter in the request URI. Enter the ID of a collection to return all the artworks, artifacts or items in that collection. For example, `http://api.thewalters.org/v1/collections/3/objects` will return the museum objects associated with collection number 3, the manuscripts collection.
`orderBy` | `string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. For example, `http://api.thewalters.org/v1/collections/3/objects?orderBy=ObjectID` will sort results by CollectionName.
`Page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/collections/2/objects?page=3` for page 3. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/collections/2/objects?pageSize=100` would produce a page with 100 results.

## Response

Here is an example of a typical response.

{
  "Items": [
    {
      "ObjectID": 76569,
      "ObjectNumber": "61.347",
      "SortNumber": "    61   347                                            ",
      "ObjectName": "religious objects",
      "CollectionID": 3,
      "Collection": "Manuscripts",
      "DateBeginYear": 1801,
      "DateEndYear": 1900,
      "DateText": "19th century",
      "Title": "Qur'an Board",
      "Dimensions": "H: 21 x W: 11 in. (53.34 x 27.94 cm)",
      "Medium": "wood, ink",
      "Style": null,
      "Culture": "Islamic",
      "Inscriptions": null,
      "Classification": "Wood",
      "Period": null,
      "Description": "From an early age, Muslims are encouraged to memorize the Qur'an. By adulthood, many can recite long passages, if not the entire text. In Qur'anic schools across northern Africa, students commit verses of the Qur'an to memory by writing them on Qur'an boards, or \"lawh.\" Faint traces of words are still visible on this example. Once a verse was memorized, the board was washed off with water, and the student could start afresh. The water was treated with great reverence, for it was believed to contain the words of God and at times was used to ward off illnesses.",
      "CreditLine": "Museum purchase, 2007",
      "ResourceURL": "http://art.thewalters.org/detail/76569",
      "Keywords": null,
      "Provenance": "Sam Fogg, London [date and mode of acquisition unknown]; Walters Art Museum, 2007, by purchase.",
      "Dynasty": null,
      "Reign": null,
      "OnView": 1,
      "PublicAccessDate": "2008-09-25T17:13:02.203",
      "Creator": "African",
      "PrimaryImage": {
        "Tiny": "http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?width=50",
        "Small": "http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?width=100",
        "Medium": "http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?width=150",
        "Large": "http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?width=250",
        "Raw": "http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg"
      },
      "GeoIDs": "1544687",
      "ExhibIDs": "2827",
      "Images": "PS1_61.347_Fnt_DD_T08.jpg"
    }
  ],
  "PageSize": 1,
  "Page": 1,
  "NextPage": true,
  "PrevPage": false,
  "ReturnStatus": true,
  "ReturnCode": 200,
  "ReturnMessage": []
}
