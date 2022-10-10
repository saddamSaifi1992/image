<?php

namespace Saddam\Image\Trait;

use Saddam\Image\Container\FileFromCheck;
use Saddam\Image\Exceptions\FileNotFoundException;

trait Generate
{
    public function generate()
    {
        $this->source = imagecreatetruecolor($this->width, $this->height);
        imagestring($this->source, $this->fontSize, $this->x, $this->y,  $this->text, $this->colorGenerator());
        return $this;
    }
    public function tranparent()
    {
        $this->source = imagecreatetruecolor($this->width, $this->height);
        $trans_colour = imagecolorallocatealpha($this->source, 0, 0, 0, 127);
        imagefill($this->source, 0, 0, $trans_colour);

        imagestring($this->source, $this->fontSize, $this->x, $this->y,  $this->text, $this->colorGenerator());
        return $this;
    }
    public function generateFromBg(string $file)
    {
        $this->source = $this->setImgBackground($file);
        imagetruecolortopalette($this->source, false, 255);
        return $this;
    }

    public function loadFile($file)
    {
        $this->source = file_exists($file) ?  (new FileFromCheck($this))->load($file) : throw new FileNotFoundException("File Not Exits");
        return $this;
    }

    public function print()
    {
        return $this->filename;
    }
}