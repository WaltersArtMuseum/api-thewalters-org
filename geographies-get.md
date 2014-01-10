Walters Art Museum Collections API (Beta)
=========================================


# Get Geographies

Geographies are locations on Earth where the various museum [objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md) have been created. Each geography  will have a geo type, display name, latitude and longitude (if available), and geography id.

This is one of 2 requests you can use to get museum exhibitions:
- [GET v1/museum/geographies](https://github.com/WaltersArtMuseum/walters-api/blob/master/geographies-get.md) Get object geographies via a number of parameters.
- [GET v1/museum/geographies/{id}/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/geographies-objects.md) Get museum objects associated with a given geography.


## Request

The `GET v1/museum/geographies` request returns a distinct list of geographic locations that match your criteria according to the parameters below. 


## Parameters

Name | Type | Description
-----|------|--------------
`geoType`|`string` | Define this parameter in the request URI. The value set will be used in a contains search, case insensitive, to match results.  If the value is empty or not included then there is nothing to filter on.
`geoTerm`|`string` | No documentation available.
`geoHierarchy`|`type` | No documentation available. 
`orderBy`|`string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. For example, `http://api.thewalters.org/v1/geographies?orderBy=geoType` will sort results by geoType.
`page`|`integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/geographies?page=3` for page 3. 
`pageSize`|`integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/geographies?pageSize=1` would produce a page with only one result.
