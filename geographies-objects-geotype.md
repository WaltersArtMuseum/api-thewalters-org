Walters Art Museum Collections API (Beta)
=========================================

## Get Objects by Geography Geotype

Geographies are locations on Earth where the various museum [objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md) have been created. Each geography  will have a geo type, display name, latitude and longitude (if available), and geography id.

This is one of 3 requests you can use to get geographical information about the Walters Collection:
- [GET v1/museum/geographies](https://github.com/WaltersArtMuseum/walters-api/blob/master/geographies-get.md) Get object geographies via a number of parameters.
- [GET v1/museum/geographies/{id}/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/geographies-objects.md) Get museum objects associated with a given geography.
- [GET /v1/geographies/geotype/{term:string}/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/geographies-objects-geotype.md)

## Request

The `GET /v1/geographies/geotype/{term:string}/objects` request will accept the name of a geotype and return a list of objects related to that geotype.


## Parameters

Name | Type | Description
-----|------|--------------
`geotype`|`string` | Description not available

