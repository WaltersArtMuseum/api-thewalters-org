Walters Art Museum Collections API
================================================================================

Documentation for the Walters Art Museum collections API. This API allows you to access data and images about works of art in our collection directly over HTTP. This document and the API described herein are subject to rapid change, as they are both still in development.

## Getting Started
- [Create an account](http://api.thewalters.org/SGAccount/Register).
- Register for an account and get an API key (i.e. token). You'll need this key to run calls agains the API. Once logged in with your account, look for [the accounts page here](http://api.thewalters.org/sgaccount/index)) to maintain or regenerate your API key.
- Go to the sandbox to [play sample requests against the api](http://api.thewalters.org/help/index). See also: an [introduction to the sandbox](api-sandbox.md).
- Review the [documentation on GitHub](https://github.com/WaltersArtMuseum/walters-api).
- Get your dev on with our API!

## Overview
There are 5 request types that you can make via the Walters API, each returns different data points related to items in the museums collection. Each of these has documentation available via the links below.
- [Collections](/collections/README.md)
- [Objects](/objects/README.md)
- [Geographies](/geographies/README.md)
- [Exhibitions](/exhibitions/README.md)
- [Museum Locations](/locations/README.md)


## Feedback
Visit [the issues page](https://github.com/WaltersArtMuseum/walters-api/issues) if you have any questions or notice any bugs with using our API. 


## Documentation Conventions
To make things easier to understand, the following notation is used:
- `{text}`: Indicates text that should be replaced by your own data. Be sure to replace the curly brackets as well.
- `...`: Indicates content from the response has been elided for brevity in documentation. Soon, we'll provide a list of data responses at the end of each page for a full description of the format of that response type.


## General Specification and Assumptions
- The API is RESTful in its convention and requires URL parameters at times to further specify results based on the the API calls made.
- All aspects of the API are UTF-8 encoded to allow for diacritical marks and special characters.
- The data responses returned to the user are available in XML and JSON as determined by the user, with the default being XML. The returned data is limited to 25 items per response and with an additional parameter you can access a second page of another 25 items.
- Pagination is used where lists of data are returned. In combination with the page index parameter, the user can specify the page size and index the requests made through pages the API provides. The default page size is 25 results per page.
- API keys must be present in order to interact with the API.
- The API has the ability to limit the amount of requests by API key to prevent abuse of the API.
- The API design has been left open ended and allows for additional requests and paths to be added at a later point. Additionally, the pathing for the API has been prefixed with an API version (in this case, v1).


## Request/Response Types
The Walters API supports both the JSON and XML data serialization formats. The format for both the request and the response can be specified either using the `Accept` header or adding an .xml or .json extension to the request URI.

If conflicting formats are specified in headers and/or format extensions, the latter takes precedence. XML is currently the default format for both requests and responses.


## A Note about Images
Wherever you see an image string reference in the API, that you can manipulate it. There are some [important options and features to understand about the images](/images.md) available through the Walters Art Museum API.
