Walters Art Museum Collections API (Beta)
=========================================


# Get Museum Locations 

Locations are locations within the Walters Art Museum where the various museum [objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md) are on view. If an object is not on view, it will be associated with a 'not on view' location.

This is one of 2 requests you can use to get museum exhibitions:
- [GET v1/museum/locations](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations-get.md) Get museum locations via a number of parameters.
- [GET v1/museum/locations/{id}/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations-objects.md) Get museum objects within a museum location.


## Request

The `GET v1/museum/locations` request returns a distinct list of locations within the museum  that match your criteria according to the parameters below. 


## Parameters

Name | Type | Description
-----|------|--------------
`display` | `string` | Define this parameter in the request URI. Enter a descriptive name for a location's position within the Walters Art Museum. For example, a value in this field could be "Centre Street: Second Floor: Lobby".
`name` | `string` | Define this parameter in the request URI. Enter the name of a location. For example, 	`http://api.thewalters.org/v1/locations?name=impressionism` will return information about the gallery of Impressionist art.
`locationID` | `integer` | Description. Enter the ID number for a location to return information about that location.
`orderBy` | `string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. For example, `http://api.thewalters.org/v1/locations?orderBy=locationID` will sort the resulting location according to each one's ID number.
`page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/exhibitions?page=3` for page 3. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/exhibitions?pageSize=1` would produce a page with only one result.

