<?php

namespace Saddam\Image\Trait;

use Saddam\Image\Container\Filter;

trait Size
{
    public $size_center_x = 100;
    public $size_center_y = 100;
    public $size_width = 100;
    public $size_height = 100;

    public function ellipse($cx = null, $cy = null, $sw = null, $sh = null, $color = null, ...$arg)
    {
        $this->setParamForSize("size_center_x", $cx);
        $this->setParamForSize("size_center_y", $cy);
        $this->setParamForSize("size_width", $sw);
        $this->setParamForSize("size_height", $sh);
        $this->setHex($color);
        imagefilledellipse($this->source, $this->size_center_x, $this->size_center_y, $this->size_width, $this->size_height, $this->getBgColor());
        return $this;
    }
    public function rectangle($cx = null, $cy = null, $sw = null, $sh = null,  $color = null, ...$arg)
    {
        $this->setParamForSize("size_center_x", $cx);
        $this->setParamForSize("size_center_y", $cy);
        $this->setParamForSize("size_width", $sw);
        $this->setParamForSize("size_height", $sh);
        $this->setHex($color);
        imagefilledrectangle($this->source, $this->size_center_x, $this->size_center_y, $this->size_width, $this->size_height, $this->getBgColor());
        return $this;
    }
    public function polygon($values, $color, $line = 6)
    {
        $this->setHex($color);
        imagefilledpolygon($this->source, $values, $line, $this->getBgColor());
        return $this;
    }
    public function border($border_x = 50, $border_y = 50, $color)
    {
        $this->setHexBg($color);

        // Fill the selection
        imagefilltoborder($this->source, $this->size_center_x, $this->size_center_y, $this->getBorderSize, $this->getBgColorBG());
        return $this;
    }

    public function line($color = null,  $x = null, $y = null, $x2 = null, $y2 = null)
    {

        if ($x === null) {
            $x = rand(0, $this->width) - 1;
        }
        if ($y === null) {
            $y = rand(($this->height / 8), $this->height) - 1;
        }

        imageline($this->source, $x, $y, $x2, $y2, $this->getColor($color));

        return $this;
    }
    public function randomLine($color = null)
    {

        $this->lineSetUp();
        // Fill the selection

        imageline($this->source, $this->line_x1, $this->line_y1, $this->line_x2, $this->line_y2, $this->getColor($color));

        return $this;
    }
    public function string($title = null, $color = null)
    {

        $title = $title ?? $this->randomText();
        $x = $this->width / 2  - (($this->width / 100) * 10);
        $y = $this->height / 2 - (($this->height / 100) * 10);
        imagestring($this->source, "1000", $x, $y,   $title, $this->getColor($color));
        return $this;
    }

    public function setParamForSize($variable, $value)
    {
        if ($value !== null) {
            $this->$variable = $value;
        }
    }



    public function lineSetUp()
    {
        $this->line_x1 = rand(0, $this->width) - 1;
        $this->line_y1 = rand(0, ($this->width / 8)) - 1;
        $this->line_x2 =  rand(($this->height / 8), $this->height) - 1;
        $this->line_y2 =  rand(($this->height / 8), $this->height) - 1;
    }

    public function screenShot($download = null)
    {
        $this->download = $download ?? true;
        $this->source = imagegrabscreen();
        return $this;
    }
    public function imagegrabwindow($download = null)
    {
        $this->download = $download ?? true;
        // $this->source = imagegrabwindow();
        return $this;
    }
    public function filter()
    {
        $this->filter = new Filter($this);
        return $this;
    }
    public function destroyed()
    {
        imagedestroy($this->source);
    }
}