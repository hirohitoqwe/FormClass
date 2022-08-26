<?php

namespace mainForm;

use Element\Submit;
use Element\Input;
use Element\TextArea;
use Element\Button;
use Element\Select;


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

    public function addInput(Input $input): void
    {
        $this->partsOfForm[] = $input;
    }

    public function addSubmit(Submit $submit): void
    {
        $this->partsOfForm['submit'] = $submit;
    }

    public function addTextArea(TextArea $textArea): void
    {
        $this->partsOfForm[] = $textArea;
    }

    public function addButton(Button $button): void
    {
        $this->partsOfForm[] = $button;
    }

    public function addSelect(Select $select): void
    {
        $this->partsOfForm[] = $select;
    }

    private function buildHeadOfForm(): string
    {
        return sprintf('<form name=%s  method=%s action=%s >', $this->attributes['name'], $this->attributes['method'], $this->attributes['action'] ?? "") . PHP_EOL;
    }


    public function buildForm(): string
    {
        $html = $this->buildHeadOfForm();

        foreach ($this->partsOfForm as $element) {
            if ($element instanceof Input) {
                $html .= $element->getInput();
            } elseif ($element instanceof TextArea) {
                $html .= $element->getTextArea();
            } elseif ($element instanceof Button) {
                $html .= $element->getButton();
            } elseif ($element instanceof Select) {
                $html .= $element->getSelect();
            }
        }

        $html .= $this->partsOfForm['submit']->getSubmit() . PHP_EOL;
        $html .= '</form>';
        return $html;
    }


}
