Walters Art Museum Collections API
===============================================================================


# Collections

Collections are one of the [5 objects you can get with the Walters API](https://github.com/WaltersArtMuseum/walters-api#overview). A collection is a group of artworks, artifacts, or similar items within the Walters Art Museum. Collections at the Walters are grouped by primarily by culture and sometimes by date. Collections are given a descriptive title and a description to help users learn more about the importance of this group of artworks, artifacts and items at the Walters.  

For example, the Asian Art collection contains items such as paintings, sculptures and ceramics that were made in or around the Asian continent. 

## Requests

There are 2 requests you can use to get museum collections:
- [GET v1/collections](collections-get.md) Get a list of museum collections via a number of parameters.
- [GET v1/collections/{id}/objects](collections-objects.md) Get museum artworks and artifacts that are within a museum collection by referencing a collection id.
