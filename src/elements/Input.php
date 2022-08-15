<?php

namespace Element;

class Input extends FormElement
{
    private string $html;

    public function __construct(private string $name, private string $type, private string $value = '', private string $placeholder = '')
    {
        $this->html = $this->buildElement();
        return $this;
    }

    public function addTitle(string $text){
        $this->html=sprintf('<p>%s</p>',$text).$this->html;
        return $this;
    }

    private function buildElement():string{
        if (!empty($this->placeholder)){
            return sprintf('<p><input type=%s name=%s placeholder=%s></p>', $this->type, $this->name,$this->placeholder);
        }else{
            return sprintf('<p><input type=%s name=%s value=%s></p>', $this->type, $this->name, $this->value);
        }

    }

    public function getInput():string
    {
        return $this->html;
    }

}