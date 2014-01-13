Walters Art Museum Collections API (Beta)
================================================================================

## Get Object Images by ID

An object is a piece of art, an artifact or similar item within the Walters collections. Each object has several properties, a unique ID and a number of images of various sizes. For example, the painting on canvas titled "The Ideal City" by artist Fra Carnevale, dating from the Renaissance, ca. 1480-1484. The resource URL for this object is http://art.thewalters.org/detail/37626. Another example of an object is an earthenware "Camel" created in China, dating from the 7th-8th century. The resource URL for this object is http://art.thewalters.org/detail/7363.

### A Note About Images

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

`Get Object Images by ID` is one of 3 requests you can use to get museum objects:
- [GET v1/objects](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects-get.md) Get museum objects via a number of parameters.
- [GET v1/objects/{id}](https://github.com/WaltersArtMuseum/walters-api/blob/master/objects-id.md) Get a museum object by ID.
- [GET v1/objects/{id}/images](https://github.com/WaltersArtMuseum/walters-api/blob/master/object-image-id.md) Get images of a museum object by ID.


## Request

The `GET v1/objects/{id}/images` request will get the images of the object whose id number has been specified by the id parameter.


## Parameters

Name | Type | Description
-----|------|--------------
`id` | `integer` | Define this parameter in the request URI. For example, `http://api.thewalters.org/v1/objects/37626/images` will get images the object record for "The Ideal City."


