<?php
namespace mainForm;

class Form
{
    private array $partsOfForm = [];
    private array $attributes = [];

    public function __construct(string $name, $method, $action = "", $enctype = "")
    {
        $this->attributes['name'] = $name;
        $this->attributes['method'] = $method;
        $this->attributes['action'] = $action;
        $this->attributes['enctype'] = $enctype;
    }

    public function addInpute(\Element\Input $input)
    {
        $this->partsOfForm['input'] = $input;
    }

    public function addSubmit(\Element\Submit $submit)
    {
        $this->partsOfForm['submit'] = $submit;
    }


    public function buildForm()
    {
        var_dump($this->attributes);
        $html=$this->buildHeadOfForm();

        foreach ($this->partsOfForm['input'] as $input) {
            $html .= $input->getInput();
        }

        $html .= $this->partsOfForm['submit']->getSubmit;

        return $html;

    }

    private function buildHeadOfForm()
    {
        $html = sprintf('<form name=%s  method=%s action=%s >', $this->attributes['name'], $this->attributes['method'], $this->attributes['action'] ?? "") . PHP_EOL;
        return $html;
    }
}
