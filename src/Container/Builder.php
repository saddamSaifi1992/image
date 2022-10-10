<?php

namespace Saddam\Image\Container;

use Saddam\Image\ImageGenerator;

class Builder
{
    public $img;

    public function __construct(ImageGenerator $imgObj)
    {
        $this->img = $imgObj;
    }

    public function chekbox()
    {
        $this->img->width = 200;
        $this->img->height = 100;
        $this->img->text = "This is my demo";
        $this->img->size_center_x = 200;
        $this->img->size_center_y = 200;
        $this->img->size_width = 250;
        $this->img->size_height = 250;
    }
    public function captacha($color = "#ffffff", $bg = '#27ae60')
    {
        return $this->img->tranparent()
            ->setHex($color)
            ->setBgColor($bg)
            ->randomLine()
            ->line(null, 10, 10, 200, 100)
            ->string()
            ->png();
    }
}