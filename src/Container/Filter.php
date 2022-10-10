<?php

namespace Saddam\Image\Container;


class Filter
{
    private $image;

    public function  __construct($image)
    {
        $this->image = $image;
    }
    public function negetive($pecentage = 20)
    {
        # code...
        //IMG_FILTER_NEGATE: Reverses all colors of the image.
        imagefilter($this->image->source, IMG_FILTER_NEGATE, $pecentage);
        return $this;
    }
    public function grayscale($pecentage = 20)
    {

        //IMG_FILTER_GRAYSCALE: Converts the image into grayscale by changing the red, green and blue components to their weighted sum using the same coefficients as the REC.601 luma (Y') calculation. The alpha components are retained. For palette images the result may differ due to palette limitations.
        imagefilter($this->image->source, IMG_FILTER_GRAYSCALE, $pecentage);
        return $this;
    }
    public function brightness($pecentage = 20)
    {
        //IMG_FILTER_BRIGHTNESS: Changes the brightness of the image. Use args to set the level of brightness. The range for the brightness is -255 to 255.
        imagefilter($this->image->source, IMG_FILTER_BRIGHTNESS, $pecentage);
        return $this;
    }
    public function contrast($pecentage = 20)
    {
        //IMG_FILTER_CONTRAST: Changes the contrast of the image. Use args to set the level of contrast.
        imagefilter($this->image->source, IMG_FILTER_CONTRAST, $pecentage);
        return $this;
    }
    public function colorize($pecentage = 20)
    {
        //IMG_FILTER_COLORIZE: Like //IMG_FILTER_GRAYSCALE, except you can specify the color. Use args, arg2 and arg3 in the form of red, green, blue and arg4 for the alpha channel. The range for each color is 0 to 255.
        imagefilter($this->image->source, IMG_FILTER_COLORIZE, 0, 0, 0, $pecentage);
        return $this;
    }
    public function edgedetect($pecentage = 20)
    {
        //IMG_FILTER_EDGEDETECT: Use s edge detection to highlight the edges in the image.
        imagefilter($this->image->source, IMG_FILTER_EDGEDETECT, $pecentage);
        return $this;
    }
    public function emboss($pecentage = 20)
    {
        //IMG_FILTER_EMBOSS: Embosses the image.
        imagefilter($this->image->source, IMG_FILTER_EMBOSS, $pecentage);
        return $this;
    }
    public function gaussianBlur($pecentage = 20)
    {
        //IMG_FILTER_GAUSSIAN_BLUR: Blurs the image using the Gaussian method.
        imagefilter($this->image->source, IMG_FILTER_GAUSSIAN_BLUR, $pecentage);
        return $this;
    }
    public function selectiveBlur($pecentage = 20)
    {
        //IMG_FILTER_SELECTIVE_BLUR: Blurs the image.
        imagefilter($this->image->source, IMG_FILTER_SELECTIVE_BLUR, $pecentage);
        return $this;
    }
    public function meanRemoval($pecentage = 20)
    {
        //IMG_FILTER_MEAN_REMOVAL: Uses mean removal to achieve a "sketchy" effect.
        imagefilter($this->image->source, IMG_FILTER_MEAN_REMOVAL, $pecentage);
        return $this;
    }
    public function smooth($pecentage = 20)
    {
        //IMG_FILTER_SMOOTH: Makes the image smoother. Use args to set the level of smoothness.
        imagefilter($this->image->source, IMG_FILTER_SMOOTH, $pecentage);
        return $this;
    }
    public function pixelate($pecentage = 20)
    {
        //IMG_FILTER_PIXELATE: Applies pixelation effect to the image, use args to set the block size and arg2 to set the pixelation effect mode.
        imagefilter($this->image->source, IMG_FILTER_PIXELATE, $pecentage);
        return $this;
    }
    public function scatter($pecentage = 20)
    {
        //IMG_FILTER_SCATTER: Applies scatter effect to the image, use args and arg2 to define the effect strength and additionally arg3 to only apply the on select pixel colors.
        imagefilter($this->image->source, IMG_FILTER_SCATTER, 1, $pecentage);
        return $this;
    }
}