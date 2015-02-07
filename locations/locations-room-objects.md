Walters Art Museum Collections API 
===============================================================================


# Get Objects by Room

```
GET v1/museum/locations/Room/{id}/objects
```

The `GET v1/museum/locations/Room/{id}/objects` request will get museum objects within a specific room (gallery) location by referencing the room name as the ID parameter. You can use [Get Locations](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations/locations-get.md) to find the ID of a room.


## Requests

There are 3 requests you can use to get information related to museum locations:

- [GET v1/museum/locations](locations-get.md) Get museum locations via a number of parameters.
- [GET v1/museum/locations/{id}/objects](locations-objects.md) Get museum objects within a museum location.
- GET [v1/museum/locations/Room/{id}/objects](locations-room-objects.md) Get museum objects within a specific room (gallery) location by referencing the room name as the ID parameter.