<?php

class Form
{
    private array $partsOfForm = [];
    private array $attributes = [];

    public function __construct(string $name, $method, $action = "")
    {
        $this->attributes['name'] = $name;
        $this->attributes['method'] = $method;
        $this->attributes['action'] = $action;
    }

    public function addInpute(string $type, string $name, $value = '', $placeholder = '')
    {
        $this->attributes['input'][] = ['type' => $type, 'name' => $name, 'value' => $value, $placeholder => $placeholder];
    }

    public function addSubmit(string $value)
    {
        $this->attributes['submit'] = ['value' => $value];
    }

    public function buildForm()
    {
        var_dump($this->attributes);

        $html = sprintf('<form name=%s  method=%s action=%s >',$this->attributes['name'],$this->attributes['method'],$this->attributes['action'] ?? "" ). PHP_EOL;

        foreach ($this->attributes['input'] as $input) {
            $html .=sprintf('<input type=%s name=%s value=%s placeholder=%s>',$input['type'],$input['name'],$input['value'],$input['placeholder'] ?? "").PHP_EOL;;
        }

        $html .=sprintf('<input type=submit value=%s>',$this->attributes['submit']['value']).PHP_EOL ."</form>";

        return $html;
    }
}