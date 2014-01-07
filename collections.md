Walters Art Museum Collections API (Beta)
===========

# Collections

Collections are one of the [5 objects you can get with the Walters API](https://github.com/WaltersArtMuseum/walters-api#overview). 

A collection is a group of pieces of art, artifacts, or similar items within the Walters Art Museum. Collections at the Walters are grouped by primarily by culture and sometimes by date. 
For example, the Asian Art collection contains items such as paintings, sculptures and ceramics that were made in or around the Asian continent.

## Requests:
```
GET v1/collections
```
This request returns a distinct list of all the collections that match your criteria. 

## Parameters:
### Name (string) = 
```
http://api.thewalters.org/v1/collections?name=Asian Art
```
This will return the collection named Asian Art. 

### Description (string) = 
```
http://api.thewalters.org/v1/collections?desc=jade
```
This will return collections with the word jade in the collection's description.

### Keyword (string) = under development

### Order By (string) = 
```
http://api.thewalters.org/v1/collections?orderBy=CollectionName
```
Enter the name of another parameter that you wish to sort results by. 
Available order by values are: 
CollectionName
CollDescription
CollectionID
NumObjects

### Page (integer)= 
```
http://api.thewalters.org/v1/collections?page=1
```
By default the value is 1, which will show you the first page of results. 
Collections will never exceed 25 results, so normally use 1 for this parameter or leave blank. 

### Page Size (integer) = `http://api.thewalters.org/v1/collections?pageSize=1`
By default page size is 25 results. 

```
GET v1/collections/{id}/objects
```
## Parameters:
### ID (integer)
Enter the ID of a collection to return all the artworks, artifacts or items in that collection.
```
http://api.thewalters.org/v1/collections/3/objects
```
### Order By (string) = 
```
http://api.thewalters.org/v1/collections/3/objects?orderBy=ObjectID
```
Enter the name of another parameter that you wish to sort results by.
/*Object Parameter or Collection Parameter ? Ask JB, not working */
Available order by values are: 


### Page (integer)= 
```
http://api.thewalters.org/v1/collections/2/objects?page=3
```
By default the value is 1, which will show you the first page of results. 

### Page Size (integer) = 
```
http://api.thewalters.org/v1/collections/2/objects?pageSize=100
```
By default page size is 25 results. 