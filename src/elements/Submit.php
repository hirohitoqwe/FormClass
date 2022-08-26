<?php

namespace Element;

class Submit extends FormElement
{
    private static $instance;
    private string $value;

    public function __construct()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public function __clone()
    {
    }


    public static function getInstance():Submit
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function addValue(string $value = ''):Submit
    {
        $this->value = $value;
        return $this;
    }

    protected function buildElement():string
    {
        return sprintf('<input type=submit value=%s>', $this->value) . "</form>";
    }

    public function getSubmit():string
    {
        return $this->buildElement();
    }


}