Walters Art Museum Collections API
===============================================================================


## Get Object

The `GET v1/objects` request will get museum objects that match your criteria according to the parameters below.


## A Note about Images
Wherever you see an image string reference in the API, you can manipulate it. There are some [important options and features to understand about the images](/images.md) available through the Walters Art Museum API.



 
## Parameters
Name | Type | Description
-----|------|--------------
`apikey` | `string` | This parameter is required to be defined in every API request. Please [obtain an API key](http://api.thewalters.org/) and include it in your API requests as follows: `http://api.thewalters.org/v1/objects?apikey=<your_api_key>`. Be sure to replace `<your_api_key>` with your actual key. 
`Keyword` | `string` | Not yet available.
`Name` | `string` | The kind of object or artwork being described. For example, name values could be sword, painting, figurine, armor, mummy.  Filters "starting with" the value you enter, for example statue will return statue, statues and statuettes.
`Title` | `string` | The proper title or identifying phrase given to an object. For example, title values could be "Bowl with Floral Pattern", "Springtime", "Head of a King", and "Puppies Under a Maple Branch"
`Object Number` | `string` | The accession number given to an object. This number is found on museum labels in galleries and is one unique identifier for an object. Accession numbers can be alpha-numeric and periods separate numeric components. For example, accession numbers could be "37.11", "22.1", "2009.20.118", and "W.854"
`Creator` | `string` | The proper name of the creator of the object, artwork or artifact. Due to the ethnographic nature of the Walters collection, creator is often a nationality or culture. For example, creator values could be Egyptian, James Callowhill, Roman, T'oros Roslin, Claude Monet, Chinese, Iranian. 
`CollectionID` | `integer` | Enter the ID number for a collection to filter objects by the collection they belong to. For more on collections, see [Get Collections](//collections/README.md). 
`YearBegin` | `integer` | Filter objects by the date range they were created, use YearBegin in combination with YearEnd to enter the start year and end year of an object's date created range. Negative numbers represent BC, positive numbers AD. For example YearBegin values could be -300, 200, 1650, 1825.
`YearEnd` | `integer` | Filter objects by the date range they were created, use YearEnd in combination with YearBegin to enter the start year and end year of an object's date created range. Negative numbers represent BC, positive numbers AD. For example YearEnd values could be -300, 200, 1650, 1825.
`Classification` | `string` | Classifications are broad categories of types of objects. [A list of classifications](#classifications) is provided below.
`Medium` | `string` | Medium is the format of an object, art or artifact, or the materials it is made of or were part of it's creation. For example, medium values could be earthenware, ink and pigments on paper, stell and leather, gilded copper, oil on canvas.
`Display Location` | `string` | Display location is the descriptive gallery name or museum location where the object is on display. Display locations reference three parts, the building (either Centre Street, Charles Street or Hackerman House), the floor and the gallery name. For example, display locations could be "Centre Street: Second Floor: Ancient Treasury" or "Centre Street: Third Floor: Islamic Arms and Armor". "Not on View" is the Display Location of items not on public display in the galleries.
`orderBy` | `string` | Enter the name of another parameter that you wish to sort results by.
`Page` | `integer` | Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. 
`pageSize` | `integer` | By default page size is 25 results. Change this number to alter the number of results per page.


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
 {"ObjectID":71,
 "ObjectNumber":"48.869",
 "SortNumber":"    48   869",
 "ObjectName":"vases",
 "CollectionID":7,
 "Collection":"18th and 19th Century Art",
 "DateBeginYear":1775,
 "DateEndYear":1800,
 "DateText":"late 18th century",
 "Title":"Venus and putti and Jupiter with a thunderbolt on clouds",
 "Dimensions":"H: 10 3/8 in. (26.3 cm)",
 "Medium":"jasperware",
 "Style":"Neoclassical",
 "Culture":null,
 "Inscriptions":"[Maker's mark] WEDGWOOD, V",
 "Classification":"Ceramics",
 "Period":"Neoclassical",
 "Description":"This jasperware vase has a relief in a top register of Venus and putti on clouds and Jupiter with a thunder bolt. The serpentine handels are white.",
 "CreditLine":"Acquired by Henry Walters, 1911 (?)",
 "ResourceURL":"http://art.thewalters.org/detail/71",
 "Keywords":"Venus; Putti; cloud",
 "Provenance":"E. F. Bonaventure, New York, 1911 (?); Henry Walters, Baltimore, before 1931, by purchase; Walters Art Museum, 1931, by bequest.",
 "Dynasty":null,
 "Reign":null,
 "OnView":0,
 "PublicAccessDate":"2012-12-13T22:00:01.067",
 "Creator":"Josiah Wedgwood (English,1730-1795)",
 "PrimaryImage":{"Tiny":"http://static.thewalters.org/images/PL7_48.869_Fnt_BW_C40.jpg?width=50","Small":"http://static.thewalters.org/images/PL7_48.869_Fnt_BW_C40.jpg?width=100","Medium":"http://static.thewalters.org/images/PL7_48.869_Fnt_BW_C40.jpg?width=150","Large":"http://static.thewalters.org/images/PL7_48.869_Fnt_BW_C40.jpg?width=250","Raw":"http://static.thewalters.org/images/PL7_48.869_Fnt_BW_C40.jpg"},
 "GeoIDs":"1468740",
 "ExhibIDs":"",
 "Images":
 "PL7_48.869_Fnt_BW_C40.jpg",
 "DisplayLocation":"Not on View"}
```
