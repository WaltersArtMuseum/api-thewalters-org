Walters Art Museum Collections API (Beta)
===========


# Get Object

An object is a piece of art, an artifact or similar item within the Walters collections. 
Each object has several properties, a unique ID and a number of images of various sizes. 

For example, the painting on canvas titled "The Ideal City" by artist Fra Carnevale, dating from the Renaissance, ca. 1480-1484. The resource URL for this object is http://art.thewalters.org/detail/37626. Another example of an object is an earthenware "Camel" created in China, dating from the 7th-8th century. The resource URL for this object is http://art.thewalters.org/detail/7363.


## Request

The 'GET v1/objects' will get museum objects via a number of parameters, listed below.

 
## Results

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

## Parameters

Name | Type | Description
-----|------|--------------
`Keyword`|`string` | Not yet available.
`Name`|`string` | The kind of object or artwork being described. For example, name values could be sword, painting, figurine, armor, mummy.  Filters "starting with" the value you enter, for example statue will return statue, statues and statuettes.
`Title`|`type` | Description.
`Creator`|`string` | Description.
`CollectionID`|`integer` | Description.
`YearBegin`|`integer` | Description.
`YearEnd`|`integer` | Description.
`Classification`|`string` | Description.
`Medium`|`string` | Description.
`orderBy`|`string` | Description.
`Page`|`integer` | Description.
`pageSize`|`integer` | Description.


### Keyword
Type: string
Example: http://api.thewalters.org/v1/objects?keyword=camel
Description: Under development

### Name 
Type: string
Example: http://api.thewalters.org/v1/objects?name=sword
Description: The kind of object or artwork being described. For example, name values could be sword, painting, figurine, armor, mummy.  Filters "starting with" the value you enter, for example statue will return statue, statues and statuettes.

###Title (string) = http://api.thewalters.org/v1/objects?title=title
The proper title or identifying phrase given to an object. For example, title values could be "Bowl with Floral Pattern", "Springtime", "Head of a King", and "Puppies Under a Maple Branch".
Filters "starting with" the value you enter, for example Bowl will return "Bowl", "Bowl with Floral Pattern", and "Bowl for Goldfish".
/*Ask John about the logic of Title being filtered by starting with, should be contains*/

###Creator  (string) = http://api.thewalters.org/v1/objects?creator=Egyptian
The proper name of the creator of the object, artwork or artifact. Due to the ethnographic nature of the Walters collection, creator is often a nationality or culture. 
For example, creator values could be Egyptian, James Callowhill, Roman, T'oros Roslin, Claude Monet, Chinese, Iranian. 

###CollectionID (integer) = http://api.thewalters.org/v1/objects?collectionId=3
Filter objects by the collection they belong to. 

###YearBegin (integer) = http://api.thewalters.org/v1/objects?yearBegin=1700
Filter objects by the date range they were created, use YearBegin in combination with YearEnd to enter the start year and end year of an object's date created range. Negative numbers represent BC, positive numbers AD.
For example YearBegin values could be -300, 200, 1650, 1825.

###YearEnd (integer) = http://api.thewalters.org/v1/objects?yearEnd=1800
Filter objects by the date range they were created, use YearEnd in combination with YearBegin to enter the start year and end year of an object's date created range. Negative numbers represent BC, positive numbers AD.
For example YearEnd values could be -300, 200, 1650, 1825.

###Classification (string) = http://api.thewalters.org/v1/objects?classification=Textiles
Classifications are broad categories of types of objects. 
Classification values can be any of these:
Miniatures
Stained & Painted Glass
Lacquer & Inlay
Ceramics
Precious Stones & Gems
Pearl, Horn, Coral & Shell
Sculpture
Textiles
Painting & Drawing
Prints
Coins & Medals
Arms & Armor
Mosaics & Cosmati
Niello
Paper & Paper-Mache
Wood
Enamels
Manuscripts & Rare Books
Ivory & Bone
Mummies & Cartonnage
Timepieces, Clocks & Watches
Glasswares
Metal
Gold, Silver & Jewelry
Stone
Resin, Wax & Composite
Leather 
    
###Medium (string) = v1/objects?medium=paint
Medium is the format of an object, art or artifact, or the materials it is made of or were part of it's creation. For example, medium values could be earthenware, ink and pigments on paper, 
stell and leather, gilded copper, oil on canvas.

###Order By (string) = 
```
http://api.thewalters.org/v1/objects?orderBy=Creator
```
Enter the name of another parameter that you wish to sort results by.
/*Object Parameter? Ask JB, not working */
Available order by values are: 


###Page (integer)= 
```
http://api.thewalters.org/v1/objects?page=3
```
By default the value is 1, which will show you the first page of results. 

###Page Size (integer) = 
```
http://api.thewalters.org/v1/objects?pageSize=100
```
By default page size is 25 results. 