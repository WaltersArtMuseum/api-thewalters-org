Walters Art Museum Collections API (Beta)
================================================================================

# Geographies

Geographies are locations on Earth where the various museum [objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md) have been created. Each geography  will have a geo type, display name, latitude and longitude (if available), and geography id.


## Requests

There are 2 requests you can use to get object geographies:
- [GET v1/museum/geographies](https://github.com/WaltersArtMuseum/walters-api/blob/master/geographies-get.md) Get object geographies via a number of parameters.
- [GET v1/museum/geographies/{id}/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/geographies-objects.md) Get museum objects associated with a given geography.