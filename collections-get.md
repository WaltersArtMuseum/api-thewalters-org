Walters Art Museum Collections API (Beta)
===========

## Get Collections

A collection is a group of [museum objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md), i.e. pieces of art, artifacts, or similar items within the Walters Art Museum. Collections at the Walters are grouped by primarily by culture and sometimes by date. For example, the Asian Art collection contains items such as paintings, sculptures and ceramics that were made in or around the Asian continent. Collections are one of the [5 objects you can get with the Walters API](https://github.com/WaltersArtMuseum/walters-api#overview). 

This is one of 2 requests you can use to get museum collections data:
- [GET v1/collections](https://github.com/WaltersArtMuseum/walters-api/blob/master/collections-get.md) Get museum objects via a number of parameters.
- [GET v1/objects/{id}/images](https://github.com/WaltersArtMuseum/walters-api/blob/master/collections-objects.md) Get museum objects within a museum collection.


## Request
```
GET v1/collections
```
This request returns a distinct list of all the collections that match your criteria. 


## Parameters

Name | Type | Description
-----|------|--------------
`name`|`string` | Define this parameter in the request URI. For example, use `http://api.thewalters.org/v1/collections?name=Asian Art` to return the collection named Asian Art. 
`desc`|`string` | Define this parameter in the request URI. Description. For example, use `http://api.thewalters.org/v1/collections?desc=jade` to return collections with the word jade in the collection's description.
`keyword`|`string` | Not yet available.
`orderBy`|`string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. For example, `http://api.thewalters.org/v1/collections?orderBy=CollectionName` will sort results by CollectionName.
`Page`|`integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/collections?page=3` for page 3. 
`pageSize`|`integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/collections?pageSize=1` would produce a page with only one result.


## Response

Here is a sample response, showing one museum collection

```
{
    "Items": [
        {
            "CollectionID": 1,
            "CollectionName": "Asian Art",
            "CollDescription": "The Walters Art Museum’s collection of Chinese art includes works that span almost five millennia, from the late Neolithic period all the way up to the turn of the twentieth century. Chinese porcelains from the Ming and Qing dynasties were some of William T. Walters’s first purchases in the mid-nineteenth century and they form the foundation of the museum’s Asian collections. With the addition to important Buddhist sculptures, carved jades, ancient bronzes, paintings, and calligraphies, Henry Walters rounded out the Chinese collection so that it precisely reflects the early twentieth-century American vision of China.  \r\n\r\nMost of the Japanese military objects William and Henry Walters collected were made during the Edo (1615-1867) and Meiji (1868-1912) periods. During these years, Japan was largely at peace. There was still a military class (the samurai), but they rarely engaged in active battle. Arms and armor became an outward symbol of status among the military class. Once Westerners were able to freely enter Japan after 1854, swords and sword fittings became popular items to collect. Some of the fittings in the Walters collection were made specifically for sale to Westerners and were never mounted on swords.\r\n\r\nOne of the most popular sword fittings among collectors was the “tsuba” or sword guard. Tsubas are placed at the end of the sword handle, or “tsuka,” to protect the bearer’s hand from being cut. Adjacent to the tsuba is a small decorated ring called the “fuchi.” This surrounds the opening on the handle and is usually paired with a “kashira” that covers the pommel end of the handle. On either side of the handle were “menuki.” These were originally developed because they helped the bearer maintain his grip on the handle, but later became strictly decorative adornments. The scabbard covering the blade is called the “saya.” In addition to shielding the sword, it often has openings along the outside to hold a utility knife and a hairpin, chopsticks or a tool designed to spur a horse. The decorated handle of the utility knife is called the “kozuka.” The other items are called “kogai,” warikogai” and “umabari.” In some cases all of these fittings were made as a set by one artist, but more frequently three or four different artists would make the pieces used in one mounting.\r\n\r\n",
            "NumObjects": 12163
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