Walters Art Museum Collections API 
===============================================================================


# Get Museum Locations 

The `GET v1/museum/locations` request returns a distinct list of [locations](README.md) within the museum  that match your criteria according to the parameters below.
 

## Parameters

Name | Type | Description
-----|------|--------------
`apikey` | `string` | This parameter is required to be defined in every API request. Please [obtain an API key](http://api.thewalters.org/) and include it in your API requests as follows: `http://api.thewalters.org/v1/objects?apikey=<your_api_key>`. Be sure to replace `<your_api_key>` with your actual key. 
`display` | `string` | Define this parameter in the request URI. Display is a descriptive name for a location and includes the building name, floor, and gallery name. For example, a value in this field could be "Centre Street: Second Floor: Lobby". Or, if for example you'd like to know about locations on the third floor you could search `http://api.thewalters.org/v1/museum/locations?display=third`
`locationID` | `integer` | Define this parameter in the request URI. Enter the ID number for a location to return information about that location. For example `http://api.thewalters.org/v1/museum/locations?locationid=4038` will return details about one specific location: the East Wall of the Impressionism gallery, on the fourth floor of the Centre Street building.
`publicAccess` | `boolean string` | Define this parameter in the request URI. Enter `TRUE` to return locations that are available for public. Enter `FALSE` to return information about the "not on view" location(s). 
`site` | `string` | Define this parameter in the request URI. Enter the code for a building within the museum campus to return the locations in within building. Choose from a set list of values: CEN (Centre Street building), HH (Hackerman House), CHS (Charles Street building). For example, `GET v1/museum/locations?site=CEN` will return all the locations in the Centre Street building.
`room` | `integer` | Define this parameter in the request URI. Enter the room number for a specific room. For example, `http://api.thewalters.org/v1/museum/locations?room=407` will return each location within room #407, which is the Impressionism gallery. 
`orderBy` | `string` | Define this parameter in the request URI. Enter the name of another parameter that you wish to sort results by. For example, `http://api.thewalters.org/v1/locations?orderBy=locationID` will sort the resulting location according to each one's ID number.
`page` | `integer` | Define this parameter in the request URI. Results are returned in paged sets. By default, the page parameter is set to 1 so that the results will show the first page of results. Change this number to return other pages. For example, `http://api.thewalters.org/v1/exhibitions?page=3` for page 3. 
`pageSize` | `integer` | Define this parameter in the request URI. By default page size is 25 results. Change this number to alter the number of results per page. For example `http://api.thewalters.org/v1/exhibitions?pageSize=1` would produce a page with only one result.

##Response

Here is a typical response, showing each museum location within room 407.

```json
{
    "Items": [
        {
            "LocationID": 4038,
            "DisplayCurrentLocation": "Centre Street: Fourth Floor: Impressionism",
            "Site": "CEN",
            "Room": "407",
            "UnitType": "EAST WALL",
            "PublicAccess": true
        },
        {
            "LocationID": 4040,
            "DisplayCurrentLocation": "Centre Street: Fourth Floor: Impressionism",
            "Site": "CEN",
            "Room": "407",
            "UnitType": "NORTH WALL",
            "PublicAccess": true
        },
        {
            "LocationID": 4041,
            "DisplayCurrentLocation": "Centre Street: Fourth Floor: Impressionism",
            "Site": "CEN",
            "Room": "407",
            "UnitType": "SOUTH WALL",
            "PublicAccess": true
        },
        {
            "LocationID": 4042,
            "DisplayCurrentLocation": "Centre Street: Fourth Floor: Impressionism",
            "Site": "CEN",
            "Room": "407",
            "UnitType": "WEST WALL",
            "PublicAccess": true
        }
    ],
    "PageSize": 25,
    "Page": 1,
    "NextPage": false,
    "PrevPage": false,
    "ReturnStatus": true,
    "ReturnCode": 200,
    "ReturnMessage": []
}
```


## Requests

There are 3 requests you can use to get information related to museum locations:

- [GET v1/museum/locations](locations-get.md) Get museum locations via a number of parameters.
- [GET v1/museum/locations/{id}/objects](locations-objects.md) Get museum objects within a museum location.
- GET [v1/museum/locations/Room/{id}/objects](locations-room-objects.md) Get museum objects within a specific room (gallery) location by referencing the room name as the ID parameter.