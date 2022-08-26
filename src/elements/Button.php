<?php

namespace Element;

class Button extends FormElement
{

    private string $html = '';

    public function __construct(private string $name = '', private string $value = '', private string $text = 'Отправить', private string $type = 'button',private string $onclick='')
    {

    }

    protected function buildElement():void
    {
        $this->html = sprintf('<p><button name="%s" value="%s" type=%s onclick="%s"> %s </button></p>', $this->name, $this->value, $this->type,$this->onclick ,$this->text);
    }

    public function getButton():string
    {
        $this->buildElement();
        return $this->html . PHP_EOL;
    }

}