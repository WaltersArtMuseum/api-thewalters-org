Walters Art Museum Collections API (Beta)
===========

## Get Object Images by ID

An object is a piece of art, an artifact or similar item within the Walters collections. Each object has several properties, a unique ID and a number of images of various sizes. For example, the painting on canvas titled "The Ideal City" by artist Fra Carnevale, dating from the Renaissance, ca. 1480-1484. The resource URL for this object is http://art.thewalters.org/detail/37626. Another example of an object is an earthenware "Camel" created in China, dating from the 7th-8th century. The resource URL for this object is http://art.thewalters.org/detail/7363.

This is one of 3 requests you can use to get museum objects:
- [GET v1/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects-get.md) Get museum objects via a number of parameters.
- [GET v1/objects/{id}](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects-id.md) Get a museum object by ID.
- [GET v1/objects/{id}/images](https://github.com/WaltersArtMuseum/walters-api/blob/master/object-image-id.md) Get images of a museum object by ID.


## Request

The `GET v1/objects/{id}/images` request will get the images of the object whose id number has been specified by the id parameter.


## Parameters

Name | Type | Description
-----|------|--------------
`id`|`integer` | Define this parameter in the request URI. For example, `http://api.thewalters.org/v1/objects/37626/images` will get images the object record for "The Ideal City."