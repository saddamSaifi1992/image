<?php

namespace Saddam\Image\Container;

class FileFromCheck
{
    private $image;
    private $file;
    private $ext;

    public function  __construct($image)
    {
        $this->image = $image;
    }

    public function load($file)
    {

        $this->file = $file;
        $this->extention();
        return $this->filter();
    }
    public function extention()
    {
        $arr = explode('.', $this->file);
        $this->ext = end($arr);
    }

    public function filter()
    {
        switch ($this->ext) {
            case 'gd':
                return @imagecreatefromgd($this->file);
                break;
            case 'gif':
                return @imagecreatefromgif($this->file);
                break;
            case 'bmp':
                return @imagecreatefrombmp($this->file);
                break;
            case 'xbn':
                return @imagecreatefromxbm($this->file);
                break;
            case 'tga':
                return @imagecreatefromtga($this->file);
                break;
            case 'xmp':
                return @imagecreatefromxpm($this->file);
                break;
            case 'png':
                return @imagecreatefrompng($this->file);
                break;
            case 'webp':
                return @imagecreatefromwebp($this->file);
                break;
            case 'avif':
                // return @imagecreatefromavif($this->file);
                break;
            case 'jpeg':
                return @imagecreatefromjpeg($this->file);
                break;
            case 'jpg':
                return @imagecreatefromjpeg($this->file);
                break;
            case 'wbmp':
                return @imagecreatefromwbmp($this->file);
                break;
            case 'string':
                return @imagecreatefromstring($this->file);
                break;
            case 'gd2':
                return @imagecreatefromgd2part($this->file, 4, 4, ($this->image->width / 2) - 6, ($this->image->height / 2) - 6);
                break;
            case 'color':
                return @imagecreatetruecolor($this->image->width, $this->image->height);;
                break;

            default:
                return @imagecreate($this->image->width, $this->image->height);
                break;
        }
    }
}