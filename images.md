Walters Art Museum Collections API (Beta)
================================================================================


## A Note About Images

Images used by this API are hosted at http://static.thewalters.org The URLs for images are able to accept a number of parameters, listed below.  
This functionality is provided by [ImageProcessor](https://github.com/JimBobSquarePants/ImageProcessor), a library for on-the-fly processing of image files. 

Name | Description | Example
-----|------|--------------
Brightness | To adjust the brightness of images, enter the desired value (-100 to 100). | `http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?brightness=60`
Contrast | To adjust the contrast of images, enter the desired value (-100 to 100). | `http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?contrast=60`
Crop | To crop an image, pass the top-left and bottom-right coordinates and the processor will work out the rest. | `http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?crop=5-5-200-200`
Format | Imageprocessor will also allow you to change the format of image on-the-fly. This can be handy for reducing the size of requests. Supported file format just now are: jpg, bmp, png, gif. | `http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?format=gif`
Quality | Imageprocessor delivers an excellent quality/filesize ratio; it also allows you to change the quality of jpegs on-the-fly. | `http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?quality=65`
Resize | Resize your image while keeping the correct aspect ratio. | `http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?width=200`
Rotate | Imageprocessor can rotate your images without clipping. You can also optionally fill the background color for image types without transparency. | `http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?rotate=angle-54|bgcolor-fff`

You can combine any of the above by including an ampersand between variables. For example, to resize an image and change its filetype format, request:  `http://static.thewalters.org/images/PS1_61.347_Fnt_DD_T08.jpg?quality=65&format=gif`