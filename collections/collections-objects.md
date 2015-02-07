Walters Art Museum Collections API 
===============================================================================


## Get Objects by Collection

```
GET v1/collections/{id}/objects
```

The `GET v1/collections/{id}/objects` request will get museum objects associated with a museum [collection](https://github.com/WaltersArtMuseum/walters-api/tree/master/collections).  Use the ``id`` parameter to specify which collection's artworks to get. The request accepts a number of other parameters, listed below.


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


## A Note about Images
Wherever you see an image string reference in the API, that you can manipulate it. There are some [important options and features to understand about the images](/images.md) available through the Walters Art Museum API.


This is one of 2 requests you can use to get museum collections data:
- [GET v1/collections](collections-get.md) Get museum objects via a number of parameters.
- [GET v1/collections/{id}/objects](collections-objects.md) Get museum artworks and artifacts that are within a museum collection by referencing a collection id.