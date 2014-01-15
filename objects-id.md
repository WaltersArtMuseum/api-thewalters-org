Walters Art Museum Collections API (Beta)
================================================================================


## Get Objects by ID
An object is a piece of art, an artifact or similar item within the Walters collections. Each object has several properties, a unique ID and a number of images of various sizes. For example, the painting on canvas titled "The Ideal City" by artist Fra Carnevale, dating from the Renaissance, ca. 1480-1484. The resource URL for this object is http://art.thewalters.org/detail/37626. Another example of an object is an earthenware "Camel" created in China, dating from the 7th-8th century. The resource URL for this object is http://art.thewalters.org/detail/7363.

This is one of 3 requests you can use to get museum objects:
- [GET v1/objects](/objects-get.md) Get museum objects via a number of parameters.
- [GET v1/objects/{id}](/objects-id.md) Get a museum object by ID.
- [GET v1/objects/{id}/images](/object-image-id.md) Get images of a museum object by ID.


## A Note about Images
Wherever you see an image string reference in the API, that you can manipulate it. There are some [important options and features to understand about the images](images.md) available through the Walters Art Museum API.


## Request
The `GET v1/objects` request will get a specific museum object via an `ID` parameter


## Parameters
Name | Type | Description
-----|------|--------------
`apikey` | `string` | This parameter is required to be defined in every API request. Please [obtain an API key](http://api.thewalters.org/) and include it in your API requests as follows: `http://api.thewalters.org/v1/objects?apikey=<your_api_key>`. Be sure to replace `<your_api_key>` with your actual key. 
`id` | `integer` | Define this parameter in the request URI. For example, `http://api.thewalters.org/v1/objects/37626` will get the object record for "The Ideal City."


# Response
Here is an example of a typical response.

```json
{
    "Data": {
        "ObjectID": 37626,
        "ObjectNumber": "37.677",
        "SortNumber": "    37   677                                            ",
        "ObjectName": "panel paintings",
        "DateBeginYear": 1468,
        "DateEndYear": 1496,
        "DateText": "ca. 1480-1484",
        "Title": "The Ideal City",
        "Dimensions": "Painted surface H: 30 1/2 x  W: 86 5/8 in. (77.4 x 220 cm); Panel H: 31 5/8 x W: 86 5/8 x D: 1 1/4 in. (80.3 x 220 x 3.2 cm); Framed H: 41 x W: 96 x D: 6 1/4 in. (104.14 x 243.21 x 15.88 cm)",
        "Medium": "oil and tempera on panel",
        "Style": null,
        "Culture": "Urbinese",
        "Inscriptions": null,
        "Classification": "Painting & Drawing",
        "Period": "Renaissance",
        "Description": "This extraordinary panel exemplifies Renaissance ideals of urban planning, respect for Greco-Roman antiquity, and the mastery of central perspective. The imaginary city square features a Roman arch typically erected as a commemoration of military victory at its center. As a whole, the painting offers a model of the architecture and sculpture that would ideally be commissioned by a virtuous ruler who cares for the welfare of the citizenry. The amphitheater is modeled on the Colosseum in Rome. The octagonal structure to the right, covered with colored stone, suggests the medieval Baptistery in Florence, which in the 15th century was thought to be a reused Roman temple. Together they reflect the importance of security, religion, and recreation in a well-regulated city and the value of Roman ideals in urban design. The private residences at either side are also dignified with classical architectural elements. Classicizing elements also appear in the foreground. Statues, set on columns in the Roman style, represent virtues of a good ruler, including Justice with her sword and scales and Liberality (generosity) with a cornucopia. This view and a related paintings now in Urbino were apparently commissioned for the palace of Duke Federico da Montefeltro of Urbino. Another related view is now in Berlin.  Set into the woodwork at shoulder height or higher, \"The Ideal City\" would have seemed like a window onto another, better world. The illusion of a space that extends out from our own is achieved using a mathematical perspective system developed in Florence. The space is defined in terms of the viewer's own angle of vision: the receding lines establishing spatial relationships converge at a central point in the city gate visible beneath and beyond the Roman arch.\r\n\r\nFor more information on this painting, please see the <a href=\"http://www.academia.edu/2967302/_The_Ideal_City_attr._to_Fra_Carnavale_in_the_Walters_art_Museum_in_M.S._Hansen_and_J._Spicer_eds._Masterpieces_of_Italian_Painting_in_the_Walters_Art_Museum._Baltimore_Walters_Art_Museum_2005_62-67/\" target=\"_blank\">entry on the painting</a> in Masterpieces of Italian Painting, The Walters Art Museum (Baltimore: the Walters Art museum, 2005), no. 15 (by Joaneath Spicer).",
        "CreditLine": "Acquired by Henry Walters with the Massarenti Collection, 1902",
        "ResourceURL": "http://art.thewalters.org/detail/37626",
        "Keywords": "perspective; architecture; symmetry; monument; Urban",
        "Provenance": "Don Marcello Massarenti Collection, Rome, prior to 1881 [mode of acquisition unknown] [1881 catalogue: no. 177; 1897 catalogue: no. 121, as Pintoricchio]; Henry Walters, Baltimore, 1902, by purchase; Walters Art Museum, 1931, by bequest. \r\n",
        "Dynasty": null,
        "Reign": null,
        "OnView": 1,
        "PublicAccessDate": "2008-09-25T17:14:58.63",
        "Geographies": [
            {
                "GeographyID": 1438822,
                "GeoType": "Place of Origin",
                "GeographyTerm": "Urbino",
                "GeoHierarchy": "The Thesaurus of Geographic Names\\World\\continents\\Europe\\nations\\Italia\\regions\\Marche\\provinces\\Pesaro e Urbino\\inhabited places\\",
                "Latitude": "43 43",
                "LatitudeDirection": "N",
                "Longitude": "012 38",
                "LongitudeDirection": "E",
                "LatitudeNumber": 43.716,
                "LongitudeNumber": 12.633
            }
        ],
        "RelatedObjects": null,
        "Images": [
            {
                "ID": 16742,
                "IsPrimary": true,
                "Rank": 1,
                "ImageURLs": {
                    "Tiny": "http://static.thewalters.org/images/PS1_37.677_FntAftTrt_DD_T09.jpg?width=50",
                    "Small": "http://static.thewalters.org/images/PS1_37.677_FntAftTrt_DD_T09.jpg?width=100",
                    "Medium": "http://static.thewalters.org/images/PS1_37.677_FntAftTrt_DD_T09.jpg?width=150",
                    "Large": "http://static.thewalters.org/images/PS1_37.677_FntAftTrt_DD_T09.jpg?width=250",
                    "Raw": "http://static.thewalters.org/images/PS1_37.677_FntAftTrt_DD_T09.jpg"
                }
            },
            {
                "ID": 42090,
                "IsPrimary": false,
                "Rank": 59,
                "ImageURLs": {
                    "Tiny": "http://static.thewalters.org/images/PS1_37.677_DetB2_DD_T12.jpg?width=50",
                    "Small": "http://static.thewalters.org/images/PS1_37.677_DetB2_DD_T12.jpg?width=100",
                    "Medium": "http://static.thewalters.org/images/PS1_37.677_DetB2_DD_T12.jpg?width=150",
                    "Large": "http://static.thewalters.org/images/PS1_37.677_DetB2_DD_T12.jpg?width=250",
                    "Raw": "http://static.thewalters.org/images/PS1_37.677_DetB2_DD_T12.jpg"
                }
            },
            {
                "ID": 42091,
                "IsPrimary": false,
                "Rank": 60,
                "ImageURLs": {
                    "Tiny": "http://static.thewalters.org/images/PS1_37.677_DetB3__DD_T12.jpg?width=50",
                    "Small": "http://static.thewalters.org/images/PS1_37.677_DetB3__DD_T12.jpg?width=100",
                    "Medium": "http://static.thewalters.org/images/PS1_37.677_DetB3__DD_T12.jpg?width=150",
                    "Large": "http://static.thewalters.org/images/PS1_37.677_DetB3__DD_T12.jpg?width=250",
                    "Raw": "http://static.thewalters.org/images/PS1_37.677_DetB3__DD_T12.jpg"
                }
            },
            {
                "ID": 42092,
                "IsPrimary": false,
                "Rank": 61,
                "ImageURLs": {
                    "Tiny": "http://static.thewalters.org/images/PS1_37.677_DetB4_DD_T12.jpg?width=50",
                    "Small": "http://static.thewalters.org/images/PS1_37.677_DetB4_DD_T12.jpg?width=100",
                    "Medium": "http://static.thewalters.org/images/PS1_37.677_DetB4_DD_T12.jpg?width=150",
                    "Large": "http://static.thewalters.org/images/PS1_37.677_DetB4_DD_T12.jpg?width=250",
                    "Raw": "http://static.thewalters.org/images/PS1_37.677_DetB4_DD_T12.jpg"
                }
            },
            {
                "ID": 42093,
                "IsPrimary": false,
                "Rank": 62,
                "ImageURLs": {
                    "Tiny": "http://static.thewalters.org/images/PS1_37.677_DetB5_DD_T12.jpg?width=50",
                    "Small": "http://static.thewalters.org/images/PS1_37.677_DetB5_DD_T12.jpg?width=100",
                    "Medium": "http://static.thewalters.org/images/PS1_37.677_DetB5_DD_T12.jpg?width=150",
                    "Large": "http://static.thewalters.org/images/PS1_37.677_DetB5_DD_T12.jpg?width=250",
                    "Raw": "http://static.thewalters.org/images/PS1_37.677_DetB5_DD_T12.jpg"
                }
            }
        ],
        "Collection": {
            "CollectionID": 8,
            "Name": "Renaissance and Baroque Art"
        },
        "MuseumLocation": {
            "LocationID": 4580,
            "DisplayCurrentLocation": "Charles Street: Third Floor: 15th-Century Italian Art",
            "LocationString": null
        },
        "Creators": [
            {
                "CreatorID": 4667,
                "ConcatDisplayName": "Fra Carnevale (Italian, 1445-1484) (?)",
                "Gender": "male",
                "Role": "Artist"
            }
        ],
        "Exhibitions": [
            {
                "ExhibitionID": 2279,
                "ExhTitle": "Il mito della Città Ideale",
                "NonWAMExhibition": true,
                "ExhibDisplayDate": "April 11, 2012-July 01, 2012",
                "ExhibBeginDate": "2012-04-11",
                "ExhibEndDate": "2012-07-01",
                "ExhibBeginYear": 2012,
                "ExhibEndYear": 2012,
                "Textblock": "Il mito della Città Ideale. Palazzo Ducale, Urbino, Galleria Nazionale delle Marche, Urbino. 2012.",
                "LocationID": null
            },
            {
                "ExhibitionID": 13,
                "ExhTitle": "Highlights from the Collection",
                "NonWAMExhibition": false,
                "ExhibDisplayDate": "August 18, 1998-April 1, 2001",
                "ExhibBeginDate": "1998-08-18",
                "ExhibEndDate": "2001-04-01",
                "ExhibBeginYear": 1998,
                "ExhibEndYear": 2001,
                "Textblock": "Highlights from the Collection. The Walters Art Gallery, Baltimore. 1998-2001.",
                "LocationID": null
            },
            {
                "ExhibitionID": 3077,
                "ExhTitle": "Circa 1492: Art in the Age of Exploration",
                "NonWAMExhibition": true,
                "ExhibDisplayDate": "October 12, 1991-January 12, 1992",
                "ExhibBeginDate": "1991-10-12",
                "ExhibEndDate": "1992-01-12",
                "ExhibBeginYear": 1991,
                "ExhibEndYear": 1992,
                "Textblock": "Circa 1492: Art in the Age of Exploration. National Gallery of Art, Washington. 1991-1992.",
                "LocationID": null
            }
        ]
    },
    "ReturnStatus": true,
    "ReturnCode": 200,
    "ReturnMessage": []
}
```
