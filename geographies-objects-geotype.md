Walters Art Museum Collections API (Beta)
================================================================================

## Get Objects by Geography Geotype

Geographies are locations on Earth where the various museum [objects](/objects.md) have been created. Each geography  will have a geo type, display name, latitude and longitude (if available), and geography id.

This is one of 3 requests you can use to get geographical information about the Walters Collection:
- [GET v1/museum/geographies](/geographies-get.md) Get object geographies via a number of parameters.
- [GET v1/museum/geographies/{id}/objects](/geographies-objects.md) Get museum objects associated with a given geography.
- [GET /v1/geographies/geotype/{term:string}/objects](/geographies-objects-geotype.md)


## A Note about Images
Wherever you see an image string reference in the API, that you can manipulate it. There are some [important options and features to understand about the images](images.md) available through the Walters Art Museum API.


## Request
The `GET /v1/geographies/geotype/{term:string}/objects` request will accept the name of a geotype and return a list of objects related to that geotype.


## Parameters
documentation in progress


## Response


```

