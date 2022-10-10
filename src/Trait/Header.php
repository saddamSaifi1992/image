<?php

namespace Saddam\Image\Trait;


trait Header
{
    public function png($param = null)
    {

        if ($this->download ||  $param !== null) {

            $this->download = false;
            $this->filename  = __DIR__ . "./../../" . $this->config('savepath') . "/" . $this->config('png_name');
            imagepng($this->source, $this->filename);
            return $this;
        } else {
            header('Content-Type: image/jpeg');
            imagepng($this->source);
        }
    }

    public function jpg()
    {
        // Set the content type header - in this case image/jpeg
        header('Content-Type: image/jpeg');

        // Output the image
        imagejpeg($this->source);
    }

    public function bmp()
    {
        // Set the content type header - in this case image/jpeg
        // header('Content-Type: image/bmp');

        // Output the image 
        imagebmp($this->source, 'php.bmp');
    }

    public function avif()
    {
        // Set the content type header - in this case image/jpeg
        header('Content-Type: image/avif');

        // Output the image
        // imageavif($this->source, $this->filename ?? "test.avif");

    }
}