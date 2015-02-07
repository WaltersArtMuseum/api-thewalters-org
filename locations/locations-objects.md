Walters Art Museum Collections API 
===============================================================================


## Get Objects by Location

```
GET v1/museum/locations/{id}/objects
```

The `GET v1/museum/locations/{id}/objects` request will get museum objects that are located within a museum location, such as one of its galleries. The request accepts a number of parameters, listed below.


## Parameters
Name | Type | Description
-----|------|--------------
`apikey` | `string` | This parameter is required to be defined in every API request. Please [obtain an API key](http://api.thewalters.org/) and include it in your API requests as follows: `http://api.thewalters.org/v1/objects?apikey=<your_api_key>`. Be sure to replace `<your_api_key>` with your actual key. 
`id` | `integer` | Define this parameter in the request URI. Enter the ID of a collection to return all the artworks, artifacts or items in that collection. For example, `http://api.thewalters.org/v1/locations/3/objects` will return the museum objects associated with museum location number 3.
`Page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/locations/2/objects?page=3` for page 3. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/locations/2/objects?pageSize=100` would produce a page with 100 results.


## Response
Here is an example of a typical response.

```json
{
    "Items": [
        {
            "ObjectID": 12294,
            "ObjectNumber": "54.884",
            "SortNumber": "    54   884                                            ",
            "ObjectName": "appliqué",
            "CollectionID": 4,
            "Collection": "Ancient Art",
            "DateBeginYear": 1,
            "DateEndYear": 99,
            "DateText": "AD 1st century",
            "Title": "Medusa",
            "Dimensions": "3 7/16 in. (8.7 cm)",
            "Medium": "bronze",
            "Style": null,
            "Culture": null,
            "Inscriptions": null,
            "Classification": "Metal",
            "Period": null,
            "Description": "Medusa, the only mortal among the three terrifying winged Gorgon sisters, could turn humans into stone. In early Greece, she was usually depicted with wings on her head, her face surrounded by snakes, with long fangs, and her tongue sticking out, all of which suggests her monstrous character. In later times, her features softened, and she was portrayed as a calm, beautiful woman. Medusa heads, intended to avert evil, were used as decorative elements on a large variety of items, such as vessels, statues, armor, and sarcophagi.",
            "CreditLine": "Acquired by Henry Walters",
            "ResourceURL": "http://art.thewalters.org/detail/12294",
            "Keywords": null,
            "Provenance": "Henry Walters, Baltimore [date and mode of acquisition unknown]; Walters Art Museum, 1931, by bequest.",
            "Dynasty": null,
            "Reign": null,
            "OnView": 0,
            "PublicAccessDate": "2009-02-17T14:22:48.183",
            "Creator": "Roman",
            "PrimaryImage": {
                "Tiny": "http://static.thewalters.org/images/PL1_54.884_Fnt_NF.jpg?width=50",
                "Small": "http://static.thewalters.org/images/PL1_54.884_Fnt_NF.jpg?width=100",
                "Medium": "http://static.thewalters.org/images/PL1_54.884_Fnt_NF.jpg?width=150",
                "Large": "http://static.thewalters.org/images/PL1_54.884_Fnt_NF.jpg?width=250",
                "Raw": "http://static.thewalters.org/images/PL1_54.884_Fnt_NF.jpg"
            },
            "GeoIDs": "",
            "ExhibIDs": "2121, 2177",
            "Images": "PL1_54.884_Fnt_NF.jpg"
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
```


## Requests

There are 3 requests you can use to get information related to museum locations:

- [GET v1/museum/locations](locations-get.md) Get museum locations via a number of parameters.
- [GET v1/museum/locations/{id}/objects](locations-objects.md) Get museum objects within a museum location.
- GET [v1/museum/locations/Room/{id}/objects](locations-room-objects.md) Get museum objects within a specific room (gallery) location by referencing the room name as the ID parameter.
