<?php

namespace Element;

class Submit extends FormElement
{
    private $html;

    public function __construct(private string $value)
    {
        $this->html = sprintf('<input type=submit value=%s>', $this->value) . "</form>";
        return $this;
    }

    private function buildSubmit(){

    }

    public function getSubmit()
    {
        return $this->html;
    }

}