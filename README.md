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

## Images

Images used by this API are hosted at http://static.walters.org The URLs for images are able to accept a number of parameters, listed below.  
This functionality is provided by [ImageProcessor](https://github.com/JimBobSquarePants/ImageProcessor), a library for on-the-fly processing of image files. 

Name | Description | Example
-----|------|--------------
Brightness | To adjust the brightness of images, enter the desired value (-100 to 100). | `yourimage.jpg?brightness=60`
Contrast | To adjust the contrast of images, enter the desired value (-100 to 100). | `yourimage.jpg?contrast=60`
Crop | To crop an image, pass the top-left and bottom-right coordinates and the processor will work out the rest. | `yourimage.jpg?crop=5-5-200-200`
Format | Imageprocessor will also allow you to change the format of image on-the-fly. This can be handy for reducing the size of requests. Supported file format just now are: jpg, bmp, png, gif. | `yourimage.jpg?format=gif`
Quality | Imageprocessor delivers an excellent quality/filesize ratio; it also allows you to change the quality of jpegs on-the-fly. | `yourimage.jpg?quality=65`
Resize | Resize your image while keeping the correct aspect ratio. | `yourimage.jpg?width=200`
Rotate | Imageprocessor can rotate your images without clipping. You can also optionally fill the background color for image types without transparency. | `yourimage.jpg?rotate=angle-54|bgcolor-fff`

You can combine any of the above by including an ampersand between variables. For example, to resize an image and change its filetype format, request:  `yourimage.jpg?quality=65&format=gif`



