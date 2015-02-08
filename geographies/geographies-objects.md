Walters Art Museum Collections API 
===============================================================================


## Get Objects by Geography

The `GET v1/museum/geographies/{id}/objects` request will get museum [objects](/objects) associated with a specific [geographic location](/geographies/). The request accepts a number of parameters, listed below.


## Parameters
Name | Type | Description
-----|------|--------------
`apikey` | `string` | This parameter is required to be defined in every API request. Please [obtain an API key](http://api.thewalters.org/) and include it in your API requests as follows: `http://api.thewalters.org/v1/objects?apikey={your_api_key}`. Be sure to replace `{your_api_key}` with your actual key. 
`geotype` | `string` | Define this parameter in the request URI. Enter a string here to search within `geoType`. This is a string that defines what type of geographical reference is being described. Choose from a set list of these GeoTypes: Source of Materials, Place of Origin, Place of Discovery, Place Mentioned, Place of Binding, Place Depicted. 
`geoTerm` | `string` | Define this parameter in the request URI. Enter a string here to search within the specific location keyword called `geoTerm`. GeoTerm would include values like a city, country, region, continent, land mass or body of water. Sample values could be: Paris, Asia, Adriatic Sea, Middle East, Boston, Pakistan, Pacific Ocean, Italy.
`geoHierarchy` | `string` | Define this parameter in the request URI. Enter a string to search for within `GeoHierarchy`.  `GeoHierarchy` is a hierarchical list that describes the location, in terms that range from the broad to the specific, according to [The Getty Thesaurus of Geographic Names](https://www.getty.edu/research/tools/vocabularies/tgn/about.html). For example, the GeoHierarchy for Guatemala reads: `The Thesaurus of Geographic Names\\World\\continents\\North and Central America\\nations\\`
`orderBy` | `string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. 
`page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. 


## Requests

There are 2 requests you can use to get geographic information:

- [GET v1/museum/geographies](geographies-get.md) Get object geographies via a number of parameters.
- [GET v1/museum/geographies/{id}/objects](geographies-objects.md) Get museum objects associated with a given geography.



