Walters Art Museum Collections API (Beta)
================================================================================

## Get Objects by Exhibition 

An exhibition is an organized presentation and display of a selection of museum objects. Exhibitions usually occur within the Walters Art Museum, but can also be held at other museums, galleries, etc. For each exhibition, the associated museum objects listed will be from the Walters collection. Although exhibitions frequently include objects from other institutions, those are not listed here. In addition to this API, [exhibition catalog publications and other museum publications](http://www.worldcat.org/search?q=au%3AWalters+Art+Museum+%28Baltimore%2C+Md.%29&qt=hot_author) are also useful resources for studying Walters' exhibitions.

This is one of 2 requests you can use to get museum exhibitions:
- [GET v1/exhibitions](https://github.com/WaltersArtMuseum/walters-api/blob/master/exhibitions-get.md) Get museum objects via a number of parameters.
- [GET v1/exhibitions/{id}/images](https://github.com/WaltersArtMuseum/walters-api/blob/master/exhibitions-objects.md) Get museum objects that are/were featured within an exhibition.


## Request

The `GET v1/exhibitions/{id}/objects` request returns a distinct list of [objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md) that are associated with an exhibition specified by the ID parameter.


## Parameters

Name | Type | Description
-----|------|--------------
`id` | `integer` | Define this parameter in the request URI. Enter the ID of an exhibition to return all the artworks, artifacts or items associated with that exhibition. For example, `http://api.thewalters.org/v1/exhibitions/3/objects` will return the museum objects associated with exhibition number 3.
`orderBy` | `string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. For example, `http://api.thewalters.org/v1/exhibitions/3/objects?orderBy=ObjectID` will sort results by CollectionName.
`page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/exhibitions/2/objects?page=3` for page 3. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/exhibitions/2/objects?pageSize=100` would produce a page with 100 results.

