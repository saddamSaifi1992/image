<?php

namespace Saddam\Image\Trait;

trait Color
{

    public function colorGenerator()
    {
        return imagecolorallocate($this->source, $this->red, $this->green, $this->blue);
    }

    public function setHex(string|null $hex)
    {
        if ($hex !== null)
            list($this->red, $this->green, $this->blue) = sscanf($hex, "#%02x%02x%02x");
        return $this;
    }

    public function setHexBg(string $hex)
    {
        list($this->redBg, $this->greenBg, $this->blueBg) = sscanf($hex, "#%02x%02x%02x");

        return $this;
    }
    public function getColor($color = null)
    {

        if ($color !== null) {
            list($r, $g, $b) = sscanf($this->randomHexaColor(), "#%02x%02x%02x");
            return imagecolorallocate($this->source, $r, $g, $b);
        } else {

            list($r, $g, $b) = sscanf($this->randomHexaColor(), "#%02x%02x%02x");
            return imagecolorallocate($this->source, $r, $g, $b);
        }
    }
    public function getBgColor()
    {
        return  imagecolorallocate($this->source, $this->red, $this->green, $this->blue);
    }
    public function getBgColorBG()
    {
        return  imagecolorallocate($this->source, $this->redBg, $this->greenBg, $this->blueBg);
    }

    public function randomHexaColor()
    {
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        return '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
    }

    public function getRandomHexaColor()
    {
        list($r, $g, $b) = sscanf($this->randomHexaColor(), "#%02x%02x%02x");
        return imagecolorallocate($this->source, $r, $g, $b);
    }

    public function getBorderSize()
    {

        return imagecolorallocate($this->source, $this->red ?? 255, $this->green ?? 0, $this->blue ?? 0);
    }
}