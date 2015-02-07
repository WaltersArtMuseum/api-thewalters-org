Walters Art Museum Collections API 
===============================================================================


# Get Objects by Room

```
GET v1/museum/locations/Room/{id}/objects
```

The `GET v1/museum/locations/Room/{id}/objects` request will get museum objects within a specific room (gallery) location by referencing the room name as the ID parameter. You can use [Get Locations](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations/locations-get.md) to find the ID of a room.