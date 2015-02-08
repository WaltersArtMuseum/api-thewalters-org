Walters Art Museum Collections API 
===============================================================================


# Locations

Locations are rooms or galleries within the Walters Art Museum where the various museum [objects](/objects/README.md) are on view. If an object is not currently on view, it will be associated with a 'not on view' location.


## Requests

There are 3 requests you can use to get information related to museum locations:

- [GET v1/museum/locations](locations-get.md) Get museum locations via a number of parameters.
- [GET v1/museum/locations/{id}/objects](locations-objects.md) Get museum objects within a museum location.
- GET [v1/museum/locations/Room/{id}/objects](locations-room-objects.md) Get museum objects within a specific room (gallery) location by referencing the room name as the ID parameter.
