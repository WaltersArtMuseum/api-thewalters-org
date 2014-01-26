Walters Art Museum Collections API (Beta)
================================================================================


# Get Geographies

Geographies are locations on Earth where the various museum [objects](/objects/README.md) have been created or discovered, or locations that an object depicts or mentions. Each geography will have a geo type, display name, latitude and longitude (if available), and geography id.

This is one of 2 requests you can use to get geographical information about the Walters Collection:
- [GET v1/museum/geographies](geographies-get.md) Get object geographies via a number of parameters.
- [GET v1/museum/geographies/{id}/objects](geographies-objects.md) Get museum objects associated with a given geography.


## Request

The `GET v1/museum/geographies` request returns a distinct list of geographic locations that match your criteria according to the parameters below. 


## Parameters

Name | Type | Description
-----|------|--------------
`apikey` | `string` | This parameter is required to be defined in every API request. Please [obtain an API key](http://api.thewalters.org/) and include it in your API requests as follows: `http://api.thewalters.org/v1/objects?apikey=<your_api_key>`. Be sure to replace `<your_api_key>` with your actual key. 
`geotype` | `string` | Define this parameter in the request URI. Enter a string here to search within `geoType`. This is a string that defines what type of geographical reference is being described. Choose from a set list of these GeoTypes: Source of Materials, Place of Origin, Place of Discovery, Place Mentioned, Place of Binding, Place Depicted.
`geoTerm` | `string` | Define this parameter in the request URI. Enter a string here to search within the specific location keyword called `geoTerm`. GeoTerm is a geography "keyword" and would include values like a city, country, region, continent, land mass or body of water. Sample values could be: Paris, Asia, Adriatic Sea, Middle East, Boston, Pakistan, Pacific Ocean, Italy.
`geoHierarchy` | `string` | Define this parameter in the request URI. Enter a string to search for within `GeoHierarchy`.  `GeoHierarchy` is a hierarchical list that describes the location, in terms that range from the broad to the specific, according to [The Getty Thesaurus of Geographic Names](https://www.getty.edu/research/tools/vocabularies/tgn/about.html). For example, the GeoHierarchy for Guatemala reads: `The Thesaurus of Geographic Names\\World\\continents\\North and Central America\\nations\\`
`orderBy` | `string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. For example, `http://api.thewalters.org/v1/geographies?orderBy=geoType` will sort results by geoType.
`page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/geographies?page=3` for page 3. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/geographies?pageSize=1` would produce a page with only one result.


## Response

Here is an example of a typical response. In this example, one geography item is returned, The West Indies.

```
{
  "Items": [
    {
      "GeographyID": 605779,
      "GeoType": "Place Depicted",
      "GeographyTerm": "West Indies",
      "GeoHierarchy": "The Thesaurus of Geographic Names\\World\\archipelagos\\",
      "Latitude": null,
      "LatitudeDirection": null,
      "Longitude": null,
      "LongitudeDirection": null,
      "LatitudeNumber": 0.0,
      "LongitudeNumber": 0.0
    }
  ],
  "PageSize": 0,
  "Page": 1,
  "NextPage": true,
  "PrevPage": false,
  "ReturnStatus": true,
  "ReturnCode": 200,
  "ReturnMessage": []
}
```
