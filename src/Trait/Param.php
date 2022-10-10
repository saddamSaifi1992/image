<?php

namespace Saddam\Image\Trait;

trait Param
{
    public $targetSize;
    public $session = null;
    public $textColorHex = "#333";
    public $text_color = "#333";
    public $backgroundColorHex = "#EEE";
    public $fontPath = null;
    public $fontSize = 12;
    public $x = 12;
    public $y = 12;
    public $fallbackFontSize = 5;
    public $text = 'A Simple Text String';
    public $path;
    public $size;
    public $width = "200";
    public $height = "200";
    public $source;
    public $red = 233;
    public $green = 14;
    public $blue = 91;
    public $redBg = 233;
    public $greenBg = 14;
    public $blueBg = 91;
    public $lines = 10;
    public $line_x1 = null;
    public $line_x2 = null;
    public $line_y1 = null;
    public $line_y2 = null;
    public $module = null;
    public $download = false;
    public $savePath = "./../images";
    public $filename;
}