Walters Art Museum Collections API (Beta)
=========================================

# Exhibitions 

An exhibition is an organized presentation and display of a selection of museum objects. Exhibitions usually occur within the Walters Art Museum, but can also be held at other museums, galleries, etc. For each exhibition, the associated museum objects listed will be from the Walters collection. Although exhibitions frequently include objects from other institutions, those are not listed here. In addition to this API, [exhibition catalog publications and other museum publications](http://www.worldcat.org/search?q=au%3AWalters+Art+Museum+%28Baltimore%2C+Md.%29&qt=hot_author) are also useful resources for studying Walters' exhibitions.

This is one of 2 requests you can use to get museum exhibitions:
- [GET v1/exhibitions](https://github.com/WaltersArtMuseum/walters-api/blob/master/exhibitions-get.md) Get museum objects via a number of parameters.
- [GET v1/exhibitions/{id}/images](https://github.com/WaltersArtMuseum/walters-api/blob/master/exhibitions-objects.md) Get museum objects that are/were featured within an exhibition.


## Request

The `GET v1/exhibitions` request returns a distinct list of exhibitions that match your criteria according to the parameters below. 


## Parameters

Name | Type | Description
-----|------|--------------
`title`|`type` | Define this parameter in the request URI. This will return exhibitions by title. For example `GET v1/exhibitions?title=Archimedes` will return the set of exhibitions whose titles contain the word "Archimedes".
`displayDate`|`type` | Description not yet available.
`beginDate`|`type` | Description not yet available.
`endDate`|`type` | Description not yet available.
`textblock`|`string` | Define this parameter in the request URI. Enter a string to search for, within an exhibition's 'text block'. The textblock presents exhibition information for a single exhibition in "citation" format, including the title, dates, venues and cities. For example: `Egypt's Mysterious Book of the Faiyum. The Walters Art Museum, Baltimore. 2013-2015.` or `19th Century Masterpieces from the Walters Art Museum. Santa Barbara Museum of Art, Santa Barbara; Jack S. Blanton Museum of Art, Austin. 2010-2011.`
`locationID`|`integer` | Define this parameter in the request URI. Enter the ID of a [museum location](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations.md) associated with the exhibition.
`nonWAMExhibition`|`integer` | Description not yet available.
`isPublicInfo`|`integer` | Description not yet available.
`beginYear`|`integer` | Define this parameter in the request URI. Filter results by a range of years. Use beginYear in combination with endYear to return exhibitions that occurred between those years. For example beginYear values could be 1950, 1980, 1975.
`endYear`|`integer` | Define this parameter in the request URI. Filter results by a range of years. Use endYear in combination with beginYear to return exhibitions that occurred between those years. For example beginYear values could be 1950, 1980, 1975.
`orderBy`|`string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. For example, `http://api.thewalters.org/v1/exhibitions?orderBy=beginYear` will sort the resulting exhibitions in chronological order by the year they began.
`page`|`integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/exhibitions?page=3` for page 3. 
`pageSize`|`integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/exhibitions?pageSize=1` would produce a page with only one result.

## A Note About Exhibition Dates

The Walters Art Museum has data to describe each of the exhibitions it has held, since it opened to the public in 1934. Many of the artworks in the collection were exhibited before that date and those records are included as well. Here is a list of some of our earliest exhibition records.

- [Exhibition title unknown, held at the Royal Academy]. Royal Academy of Arts, London. 1818.
- Salon, Paris, 1831. Musée du Louvre, Paris. 1831.
- [Exhibition title unknown, held at Galerie des Beaux-Arts]. Galerie des Beaux-Arts, Paris, Paris. 1844.
- Salon, Paris, 1846. Musée du Louvre, Paris. 1846.
- General Exhibition of the Various Schools of Painters at Lichfield House. Lichfield House, London. 1851. Exposition Universelle. Paris. 1855.
- The Art Treasures Exhibition. Manchester. 1857. 
- Special Exhibition of the Works of Art of the Mediaeval, Renaissance, and More Recent Periods. South Kensington Museum, London. 1862.