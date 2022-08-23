<?php

namespace Element;

class TextArea extends FormElement
{
    private string $html;

    public function __construct(private int $rows, private int $cols, private string $name, private string $text, private string $placeholder = '')
    {
        return $this;
    }

    protected function BuildElement(): string
    {
        $html = sprintf('<p><textarea rows=%s cols=%s name=%s placeholder=%s>', $this->rows, $this->cols, $this->name, $this->placeholder);
        $html .= $this->text . '</textarea></p>';
        return $html;
    }

    public function getTextArea(): string
    {
        $this->html = $this->BuildElement();
        return $this->html.PHP_EOL;
    }
}