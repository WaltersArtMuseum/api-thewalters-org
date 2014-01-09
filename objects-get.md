Walters Art Museum Collections API (Beta)
===========


## Get Object

An object is a piece of art, an artifact or similar item within the Walters collections. Each object has several properties, a unique ID and a number of images of various sizes. For example, the painting on canvas titled "The Ideal City" by artist Fra Carnevale, dating from the Renaissance, ca. 1480-1484. The resource URL for this object is http://art.thewalters.org/detail/37626. Another example of an object is an earthenware "Camel" created in China, dating from the 7th-8th century. The resource URL for this object is http://art.thewalters.org/detail/7363.

This is one of 3 requests you can use to get museum objects:
- [GET v1/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects-get.md) Get museum objects via a number of parameters.
- [GET v1/objects/{id}](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects-id.md) Get a museum object by ID.
- [GET v1/objects/{id}/images](https://github.com/WaltersArtMuseum/walters-api/blob/master/object-image-id.md) Get images of a museum object by ID.


## Request

The `GET v1/objects` request will get museum objects via a number of parameters, listed below.

 
## Parameters

Name | Type | Description
-----|------|--------------
`Keyword`|`string` | Not yet available.
`Name`|`string` | The kind of object or artwork being described. For example, name values could be sword, painting, figurine, armor, mummy.  Filters "starting with" the value you enter, for example statue will return statue, statues and statuettes.
`Title`|`string` | The proper title or identifying phrase given to an object. For example, title values could be "Bowl with Floral Pattern", "Springtime", "Head of a King", and "Puppies Under a Maple Branch"
`Creator`|`string` | The proper name of the creator of the object, artwork or artifact. Due to the ethnographic nature of the Walters collection, creator is often a nationality or culture. For example, creator values could be Egyptian, James Callowhill, Roman, T'oros Roslin, Claude Monet, Chinese, Iranian. 
`CollectionID`|`integer` | Enter the ID number for a collection to filter objects by the collection they belong to. For more on collections, see [Get Collections](https://github.com/WaltersArtMuseum/walters-api/blob/master/collections.md). 
`YearBegin`|`integer` | Filter objects by the date range they were created, use YearBegin in combination with YearEnd to enter the start year and end year of an object's date created range. Negative numbers represent BC, positive numbers AD. For example YearBegin values could be -300, 200, 1650, 1825.
`YearEnd`|`integer` | Filter objects by the date range they were created, use YearEnd in combination with YearBegin to enter the start year and end year of an object's date created range. Negative numbers represent BC, positive numbers AD. For example YearEnd values could be -300, 200, 1650, 1825.
`Classification`|`string` | Classifications are broad categories of types of objects. [A list of classifications](#classifications) is provided below.
`Medium`|`string` | Medium is the format of an object, art or artifact, or the materials it is made of or were part of it's creation. For example, medium values could be earthenware, ink and pigments on paper, stell and leather, gilded copper, oil on canvas.
`orderBy`|`string` | Enter the name of another parameter that you wish to sort results by.
`Page`|`integer` | Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. 
`pageSize`|`integer` | By default page size is 25 results. Change this number to alter the number of results per page.


### Classifications
The classification parameter values can accept any of these values :

- Miniatures
- Stained & Painted Glass
- Lacquer & Inlay
- Ceramics
- Precious Stones & Gems
- Pearl, Horn, Coral & Shell
- Sculpture
- Textiles
- Painting & Drawing
- Prints
- Coins & Medals
- Arms & Armor
- Mosaics & Cosmati
- Niello
- Paper & Paper-Mache
- Wood
- Enamels
- Manuscripts & Rare Books
- Ivory & Bone
- Mummies & Cartonnage
- Timepieces, Clocks & Watches
- Glasswares
- Metal
- Gold, Silver & Jewelry
- Stone
- Resin, Wax & Composite
- Leather 


## Response

Here is a sample from a typical response, showing a museum object.

```
  {
            "ObjectID": 1,
            "ObjectNumber": "IL.2002.3.20",
            "SortNumber": "IL 2002 3 20",
            "ObjectName": "pins (fasteners)",
            "CollectionID": 2,
            "Collection": "Ancient Americas",
            "DateBegin": 1200,
            "DateEnd": 1400,
            "Dated": "1200-1400",
            "Title": "Pin with Carved Figures",
            "Dimensions": "6 x 1 1/8 in. (15.3 x 2.8 cm) (h. x d.)",
            "Medium": "wood",
            "Style": null,
            "Culture": "Chimú",
            "Inscriptions": null,
            "Classification": null,
            "Period": "Late Intermediate",
            "Description": "Though many wooden Chimú objects have survived in the desert climate of the Peruvian coast, few surpass the intricacy of this design. At top, the large bird nips at a rabbit, which climbs the back of a crouching figure, who holds another bird's beak directly to his nose. The precise arrangement of the group indicates a now-lost myth that would explain this puzzling interaction.",
            "CreditLine": "Loaned by the Directors of The Austen-Stokes Ancient Americas Foundation",
            "ResourceURL": "http://art.thewalters.org/detail/1",
            "Provenance": "The Austen-Stokes Ancient Americas Foundation [date and mode of acquisition unknown].",
            "Dynasty": null,
            "Reign": null,
            "IsParent": 1,
            "CuratorRevISODate": "2009-04-14",
            "CatalogueISODate": "2009-02-11",
            "PublicAccess": 0,
            "CuratorApproved": 1,
            "OnView": 0,
            "FlagEnteredDate": null,
            "Creator": "Peruvian",
            "PrimaryImage": {
                "Tiny": "http://static.thewalters.org/images/PS1_IL.2002.3.20_Fnt_DD_T09.jpg?width=50",
                "Small": "http://static.thewalters.org/images/PS1_IL.2002.3.20_Fnt_DD_T09.jpg?width=100",
                "Medium": "http://static.thewalters.org/images/PS1_IL.2002.3.20_Fnt_DD_T09.jpg?width=150",
                "Large": "http://static.thewalters.org/images/PS1_IL.2002.3.20_Fnt_DD_T09.jpg?width=250",
                "Raw": "http://static.thewalters.org/images/PS1_IL.2002.3.20_Fnt_DD_T09.jpg"
            },
            "ExhibitionID": null,
            "LocationID": null,
            "GeographyID": null
        }
```
