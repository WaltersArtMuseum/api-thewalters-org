Walters Art Museum Collections API (Beta)
================================================================================

Documentation of the API for the collection of the Walters Art Museum. This document and the API described herein are subject to rapid change, as they are both still in development.


## Getting Started
- Create an account (coming soon)
- Get API Token (coming soon)
- Register get token text (coming soon)
- Review the documentation here


## Overview

There are 5 objects that you can get via the Walters API. Each of these has documentation available via the links below.

- [Collections](https://github.com/WaltersArtMuseum/walters-api/blob/master/collections.md)
- [Objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects.md)
- [Geographies](https://github.com/WaltersArtMuseum/walters-api/blob/master/geographies.md)
- [Exhibitions](https://github.com/WaltersArtMuseum/walters-api/blob/master/exhibitions.md)
- [Museum Locations](https://github.com/WaltersArtMuseum/walters-api/blob/master/locations.md)


## Feedback

Visit [the issues page](https://github.com/WaltersArtMuseum/walters-api/issues) if you have any questions or notice any bugs with using our API. 


# Notes

Here are some general notes and documentation about the API. These notes may move to other parts of the documentation, once they are complete.

## Documentation Conventions

To make things easier to understand, the following notation is used:

- `#{text}`: Indicates text that should be replaced by your own data
- `...`: Indicates content from the response has been elided for brevity in documentation. Soon, we'll provide a list of data responses at the end of each page for a full description of the format of that response type.

## General Specification and Assumptions
- The API will be RESTful in its convention and will require URL parameters at times to further specify results based on the the API calls made.
- All aspects of the API will be UTF-8 encoded to allow for diacritical marks and special characters.
- The data responses returned to the user will be available in XML and JSON as determined by the user, with the default being JSON, and the returned data will be limited to 25 items per response and that with an additional parameter you can access a second page of another 25 items.
- Pagination will be used where lists of data are returned. In combination with the page index parameter, the user can specify the page size and index of the requests made to work through pages the the API will provide. The default page size will be set at a 25 results per page.
- API keys must be present in order to interact with the API.
- The API will have the ability to limit the amount of requests by API key to prevent abuse of the API.
- The API design will be left open ended and we will allow for additional requests and paths to be added at a later point. Additionally, the pathing for the API will be prefixed with an API version in this case v1.

## Request/Response Types

The Walters API supports both the JSON and XML data serialization formats. The format for both the request and the response can be specified either using the Content-Type header or adding an .xml or .json extension to the request URI.

If conflicting formats are specified in headers and/or format extensions, the latter takes precedence. XML is currently the default format for both requests and responses.





