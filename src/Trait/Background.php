<?php

namespace Saddam\Image\Trait;

trait Background
{
    public function setBgColor(string $hex)
    {
        $this->setHexBg($hex);

        imagefilledrectangle($this->source, 0, 0, $this->width, $this->height, $this->getBgColorBG());
        return $this;
    }
    public function setImgBackground(string $file)
    {
        $ext = explode('.', $file);
        switch ($ext[1]) {
            case 'avif':
                // imagecreatefromavif($file);

                break;
            case 'bmp':
                return imagecreatefrombmp($file);
                break;
            case 'gif':
                return imagecreatefromgif($file);
                break;
            case 'jpeg':
                return imagecreatefromjpeg($file);
                break;
            case 'jpg':
                return imagecreatefromjpeg($file);
                break;
            case 'png':
                return imagecreatefrompng($file);
                break;
            case 'tga':
                return imagecreatefromtga($file);
                break;
            case 'wbmp':
                return imagecreatefromwbmp($file);
                break;
            case 'webp':
                return imagecreatefromwebp($file);
                break;
            case 'xbm':
                return imagecreatefromxbm($file);
                break;
            case 'xpm':
                return imagecreatefromxbm($file);
                break;

            default:
                return imagecreatefromjpeg($file);
                break;
        }
    }
}