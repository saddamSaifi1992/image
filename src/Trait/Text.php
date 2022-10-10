<?php

namespace Saddam\Image\Trait;

use Saddam\Image\Container\Session;

trait Text
{
    public function randomText()
    {
        $text = bin2hex(random_bytes(3));
        $this->sessionCreate();
        $this->session->set("stringText", $text);
        return $text;
    }

    public function  sessionCreate()
    {
        $this->session = new Session;
    }

    public function printFile()
    {
        $this->session = new Session;
    }
}