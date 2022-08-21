<?php

namespace mainForm;

use Element\Submit;
use Element\Input;
use Element\TextArea;

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

    public function addInpute(Input $input)
    {
        $this->partsOfForm['input'][] = $input;
    }

    public function addSubmit(Submit $submit)
    {
        $this->partsOfForm['submit'] = $submit;
    }

    public function addTextArea(TextArea $textArea){
        $this->partsOfForm['textArea'][]=$textArea;
    }

    private function buildHeadOfForm()
    {
        return sprintf('<form name=%s  method=%s action=%s >', $this->attributes['name'], $this->attributes['method'], $this->attributes['action'] ?? "") . PHP_EOL;
    }



    public function buildForm()
    {
        $html = $this->buildHeadOfForm();
        foreach ($this->partsOfForm['input'] as $input) {
            $html .= $input->getInput();
        }

        if (!empty($this->partsOfForm['textArea'])){
            foreach ($this->partsOfForm['textArea'] as $textArea) {
                $html .= $textArea->getTextArea();
            }
        }

        $html .= $this->partsOfForm['submit']->getSubmit().PHP_EOL;
        $html.='</form>';
        return $html;
    }


}
