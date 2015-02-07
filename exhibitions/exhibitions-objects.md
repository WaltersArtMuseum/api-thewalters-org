Walters Art Museum Collections API 
===============================================================================

## Get Objects by Exhibition 

The `GET v1/exhibitions/{id}/objects` request returns a distinct list of [objects](/objects/README.md) that are associated with an exhibition specified by the ID parameter.


## Parameters

Name | Type | Description
-----|------|--------------
`apikey` | `string` | This parameter is required to be defined in every API request. Please [obtain an API key](http://api.thewalters.org/) and include it in your API requests as follows: `http://api.thewalters.org/v1/objects?apikey=<your_api_key>`. Be sure to replace `<your_api_key>` with your actual key. 
`id` | `integer` | Define this parameter in the request URI. Enter the ID of an exhibition to return all the artworks, artifacts or items associated with that exhibition. For example, `http://api.thewalters.org/v1/exhibitions/3/objects` will return the museum objects associated with exhibition number 3.
`orderBy` | `string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. For example, `http://api.thewalters.org/v1/exhibitions/3/objects?orderBy=ObjectID` will sort results by CollectionName.
`page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/exhibitions/2/objects?page=3` for page 3. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/exhibitions/2/objects?pageSize=100` would produce a page with 100 results.

## Response

Here is an example of a typical response.


```
{
  "Items": [
    {
      "ObjectID": 38985,
      "ObjectNumber": "48.33",
      "SortNumber": "    48    33                                            ",
      "ObjectName": "hydriae; vases",
      "CollectionID": 4,
      "Collection": "Ancient Art",
      "DateBeginYear": -532,
      "DateEndYear": -508,
      "DateText": "ca. 520 BC",
      "Title": "Black-figure Hydria Depicting a Wedding Procession",
      "Dimensions": "H: 16 15/16 x W: 14 11/16 x D: 14 7/16 in. (43 x 37.3 x 36.6 cm)",
      "Medium": "terracotta",
      "Style": "Attic",
      "Culture": null,
      "Inscriptions": null,
      "Classification": "Ceramics",
      "Period": null,
      "Description": "The scene in the main panel of this hydria represents a wedding procession, with the bride and groom in a chariot drawn by four horses. While the groom manages the horses' reins, the woman holds her veil out in a gesture of modesty befitting the Greek bride. Behind the horses are two gods and two goddesses. Just in front of the newlyweds is Demeter, goddess of grain, who holds sheaths of wheat in each of her upraised hands. Looking back at her is Dionysos, the god of wine, who wears a wreath of ivy on his head and holds a large kantharos, his distinctive wine cup. Another figure wearing a polos on her head raises her hand toward the couple, perhaps in a gesture of greeting. At the far right is Hermes, mostly hidden by the horses. Grapevines and large bunches of grapes in the field, alluding to the wine used in celebration of the event, create a sense of crowded festivity.  \r\n\r\nAt the center of the scene on the shoulder is Theseus battling the Minotaur. The hero lunges, his sword drawn and prepared to strike, as he grasps the right arm of his opponent. The scene captures this tale at the height of the action, just before Theseus slays the beast and frees his people from having to offer the Minotaur a yearly sacrifice of young Athenian children. A man and a woman stand on each side of the dueling pair. Each woman has skin rendered in added white and holds a wreath. One of these women is likely Ariadne, whom Theseus married and later abandoned; the object she holds possibly refers to a glowing wreath she gave to Theseus to guide him out of the Minotaur's labyrinth. The identity of the other figures is unclear, but they may represent companions of the Athenian hero.",
      "CreditLine": "Acquired by Henry Walters with the Massarenti Collection, 1902",
      "ResourceURL": "http://art.thewalters.org/detail/38985",
      "Keywords": null,
      "Provenance": "Don Marcello Massarenti Collection, Rome, before 1897 [cat. no. 177]; Henry Walters, Baltimore, 1902, by purchase; Walters Art Museum, 1931, by bequest.",
      "Dynasty": null,
      "Reign": null,
      "OnView": 0,
      "PublicAccessDate": "2009-03-16T17:02:50.457",
      "Creator": "Lysippides-Andokides Group (Greek, active ca. 520 BC) (?)",
      "PrimaryImage": {
        "Tiny": "http://static.thewalters.org/images/PS1_48.33_Fnt_DD_T07.jpg?width=50",
        "Small": "http://static.thewalters.org/images/PS1_48.33_Fnt_DD_T07.jpg?width=100",
        "Medium": "http://static.thewalters.org/images/PS1_48.33_Fnt_DD_T07.jpg?width=150",
        "Large": "http://static.thewalters.org/images/PS1_48.33_Fnt_DD_T07.jpg?width=250",
        "Raw": "http://static.thewalters.org/images/PS1_48.33_Fnt_DD_T07.jpg"
      },
      "GeoIDs": "1431462",
      "ExhibIDs": "2089",
      "Images": "PS1_48.33_Fnt_DD_T07.jpg"
    },
    {
      "ObjectID": 3696,
      "ObjectNumber": "48.2107",
      "SortNumber": "    48  2107                                            ",
      "ObjectName": "amphorae; vases",
      "CollectionID": 4,
      "Collection": "Ancient Art",
      "DateBeginYear": -512,
      "DateEndYear": -485,
      "DateText": "ca. 500-485 BC",
      "Title": "Black-figure Pseudo-Panathenaic Amphora",
      "Dimensions": "H: 17 5/16 x Diam: 10 9/16 in. (44 x 26.9 cm)",
      "Medium": "terracotta",
      "Style": "Attic",
      "Culture": null,
      "Inscriptions": null,
      "Classification": "Ceramics",
      "Period": null,
      "Description": "The image on the obverse of this amphora may represent the \"mousikoi agones,\" or musical competitions, of the Panathenaic festival (Bundrick 2005, 160-74). In the center of the scene, a bearded man clad in an ankle-length white chiton stands on a \"bema,\" or podium. Facing right, he holds a large seven-stringed kithara in this left hand. With his right hand, he plays the instrument, using a plectrum attached by a string. The kithara's cover hangs below. Added white paint has been applied to the arms of the elaborate kithara to simulate ivory. One man stands on either side of the bema, perhaps representing spectators, trainers, or judges of the competition. \r\n\r\nThe kithara was a highly esteemed instrument in Archaic Greece, and both Apollo and Orpheus were mythological models for human performers (Shapiro 1992, 69). Herodotus (1.23-24) reports the story of Arion, a highly regarded and successful kitharode who was thrown overboard from a ship by men who conspired to rob him. According to the tale, Arion was saved by a dolphin and returned to shore unharmed, which suggests that kitharodes were believed to have enjoyed the patronage of Apollo. The image on this vase finds a heroic counterpart in the representation of Herakles Mousikos, in which the hero appears as the performer, often with Olympic deities as spectators. \r\n\r\nOn the amphora's obverse, Athena strides to the left, wearing her characteristic helmet and scaly aegis. The goddess wields a spear and holds a large shield decorated with a soaring eagle. Two Doric columns, each with a rooster perched on top, flank the goddess. This is the standard configuration for one side of the Panathenaic amphora, which was given as a prize at the quadrennial games in honor of the patron goddess of Athens. However, the size of this vase and the lack of an inscription indicate that it was not actually used as a prize.",
      "CreditLine": "Museum purchase, 1958",
      "ResourceURL": "http://art.thewalters.org/detail/3696",
      "Keywords": null,
      "Provenance": "William Randoph Hearst, San Simeon [date and mode of acquisition unknown]; Garrett Chatfield Pier Sale, Anderson Galleries, 1958; Walters Art Museum, 1958, by purchase.",
      "Dynasty": null,
      "Reign": null,
      "OnView": 0,
      "PublicAccessDate": "2009-03-16T16:22:20.91",
      "Creator": "Greek",
      "PrimaryImage": {
        "Tiny": "http://static.thewalters.org/images/PS1_48.2107_SideA_DD_T08.jpg?width=50",
        "Small": "http://static.thewalters.org/images/PS1_48.2107_SideA_DD_T08.jpg?width=100",
        "Medium": "http://static.thewalters.org/images/PS1_48.2107_SideA_DD_T08.jpg?width=150",
        "Large": "http://static.thewalters.org/images/PS1_48.2107_SideA_DD_T08.jpg?width=250",
        "Raw": "http://static.thewalters.org/images/PS1_48.2107_SideA_DD_T08.jpg"
      },
      "GeoIDs": "1431462",
      "ExhibIDs": "2089",
      "Images": "PS1_48.2107_DetA_DD_T08.jpg, PS1_48.2107_DetB_DD_T08.jpg, PS1_48.2107_SideA_DD_T08.jpg, PS1_48.2107_SideB_DD_T08.jpg"
    }
  ],
  "PageSize": 2,
  "Page": 1,
  "NextPage": true,
  "PrevPage": false,
  "ReturnStatus": true,
  "ReturnCode": 200,
  "ReturnMessage": []
}
```

This is one of 2 requests you can use to get museum exhibitions:

- [GET v1/exhibitions](exhibitions-get.md) Get museum objects via a number of parameters.
- [GET v1/exhibitions/{id}/objects](exhibitions-objects.md) Get museum objects that are/were featured within an exhibition.