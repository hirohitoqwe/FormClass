<?php

namespace Element;

class Input extends FormElement
{
    private $html;

    public function __construct(public string $name, public string $type, public string $value = '', public string $placeholder = '')
    {
        $this->html = $this->buildElement();
        return $this;
    }

    private function buildElement(){
        return sprintf('<input type=%s name=%s value=%s placeholder=%s>', $this->type, $this->name, $this->value, $this->placeholder);
    }

    public function getInput()
    {
        return $this->html;
    }

}