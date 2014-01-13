Walters Art Museum Collections API (Beta)
================================================================================


# Locations

Locations are locations within the Walters Art Museum where the various museum [objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md) are on view. If an object is not on view, it will be associated with a 'not on view' location.


## Requests

There are 2 requests you can use to get museum locations:
- [GET v1/museum/locations](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations-get.md) Get museum locations via a number of parameters.
- [GET v1/museum/locations/{id}/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations-objects.md) Get museum objects within a museum location.