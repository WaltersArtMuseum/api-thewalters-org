Walters Art Museum Collections API (Beta)
================================================================================

## Get Objects by Geography

Geographies are locations on Earth where the various museum [objects](/objects.md) have been created. Each geography  will have a geo type, display name, latitude and longitude (if available), and geography id.

This is one of 3 requests you can use to get geographical information about the Walters Collection:
- [GET v1/museum/geographies](/geographies-get.md) Get object geographies via a number of parameters.
- [GET v1/museum/geographies/{id}/objects](/geographies-objects.md) Get museum objects associated with a given geography.
- [GET /v1/geographies/geotype/{term:string}/objects](/geographies-objects-geotype.md)

## Request

The `GET v1/museum/geographies/{id}/objects` request will get museum objects associated with a specific geographic location. The request accepts a number of parameters, listed below.


## Parameters

Name | Type | Description
-----|------|--------------
`apikey` | `string` | This parameter is required to be defined in every API request. Please [obtain an API key](http://api.thewalters.org/) and include it in your API requests as follows: `http://api.thewalters.org/v1/objects?apikey=<your_api_key>`. Be sure to replace `<your_api_key>` with your actual key. 
`geotype` | `string` | Description not available
`geoTerm`	 | `string` |  `Define this parameter in the request URI.
`geoHierarchy` | `string` | Define this parameter in the request URI.
`orderBy` | `string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. 
`page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. 


## Response

Here is an example of a typical response.



