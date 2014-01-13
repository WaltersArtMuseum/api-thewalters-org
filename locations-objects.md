Walters Art Museum Collections API (Beta)
================================================================================

## Get Objects by Location

Locations are locations within the Walters Art Museum where the various museum [objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md) are on view. If an object is not on view, it will be associated with a 'not on view' location.

This is one of 2 requests you can use to get museum collections data:
- [GET v1/museum/locations](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations-get.md) Get museum locations via a number of parameters.
- [GET v1/museum/locations/{id}/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations-objects.md) Get museum objects within a museum location.

## Request

The `GET v1/museum/locations/{id}/objects` request will get museum objects that are located within a museum location, such as one of its galleries. The request accepts a number of parameters, listed below.


## Parameters

Name | Type | Description
-----|------|--------------
`id` | `integer` | Define this parameter in the request URI. Enter the ID of a collection to return all the artworks, artifacts or items in that collection. For example, `http://api.thewalters.org/v1/locations/3/objects` will return the museum objects associated with museum location number 3.
`Page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/locations/2/objects?page=3` for page 3. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/locations/2/objects?pageSize=100` would produce a page with 100 results.
