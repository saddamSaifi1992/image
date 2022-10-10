<?php

namespace Saddam\Image\Container;


class Config
{
    public $config;
    public function  __construct()
    {
        $this->config = include __DIR__ . './../config/config.php';
    }
    public function config(string $var = null)
    {
        if ($var !== null) {
            return $this->config[$var];
        }
    }
}