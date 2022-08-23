<?php

namespace Element;

class Button extends FormElement
{

    private $html = null;

    public function __construct(private string $name = '', private string $value = '', private string $text = 'Отправить', private string $type = 'button')
    {

    }

    protected function buildElement()
    {
        $this->html = sprintf('<p><button name="%s" value="%s" type=%s> %s </button></p>', $this->name, $this->value, $this->type, $this->text);
    }

    public function getButton()
    {
        $this->buildElement();
        return $this->html . PHP_EOL;
    }

}