Walters Art Museum Collections API (Beta)
================================================================================


# Objects
An object is a piece of art, an artifact or similar item within the Walters collections. 
Each object has several properties, a unique ID and at least one, but often several images of various sizes. 

For example, an object could be the painting on canvas titled "The Ideal City" by artist Fra Carnevale, dating from the Renaissance, ca. 1480-1484. The resource URL for this object is http://art.thewalters.org/detail/37626. Another example of an object is an earthenware "Camel" created in China, dating from the 7th-8th century. The resource URL for this object is http://art.thewalters.org/detail/7363.


## Requests
There are 3 requests you can use to get museum objects.

- [GET v1/objects](/objects-get.md) Get museum objects via a number of parameters.
- [GET v1/objects/{id}](/objects-id.md) Get a museum object by referencing an object ID.
- [GET v1/objects/{id}/images](/object-image-id.md) Get images of a museum object by referencing an object ID.
