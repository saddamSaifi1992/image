<?php

namespace Saddam\Image\Container;

class Session
{
    public function  __construct()
    {
        if (!session_id()) {
            session_start();
        }
    }

    public function get($name)
    {
        return $_SESSION[$name];
    }

    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }
}