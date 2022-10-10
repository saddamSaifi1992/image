<?php

namespace Saddam\Image;

use Saddam\Image\Trait\Background;
use Saddam\Image\Trait\Captcha;
use Saddam\Image\Trait\Color;
use Saddam\Image\Trait\Generate;
use Saddam\Image\Trait\Header;
use Saddam\Image\Trait\Param;
use Saddam\Image\Trait\Size;
use Saddam\Image\Trait\Text;

use Psr\Container\ContainerInterface;
use Saddam\Image\Container\Config;

class ImageGenerator extends Config
{
    use Param, Header, Color, Generate, Background, Size, Text, Captcha;

    public function  __construct(...$arg)
    {
        parent::__construct();

        if (is_array($arg)) {
            foreach ($arg as $arr) {
                $class_arr = explode("\\", strtolower(get_class($arr)));
                $name = end($class_arr);
                $this->$name =  new $arr;
            }
        }
    }

    function __destruct()
    {
        if ($this->source)
            $this->destroyed();
    }
}