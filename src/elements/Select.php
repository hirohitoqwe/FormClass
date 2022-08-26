<?php

namespace Element;

class Select extends FormElement
{

    private string $html = '';

    public function __construct(private string $name, private array $options, private string $size = '', private bool $multiple = false)//size can be 0,this == ''
    {

    }


    protected function buildElement(): void
    {
        if ($this->multiple) {
            $this->html = sprintf("<select name='%s' multiple size='%s'  >", $this->name, $this->size) . PHP_EOL;
        } else {
            $this->html = sprintf("<select name='%s' size='%s'  >", $this->name, $this->size) . PHP_EOL;
        }

        foreach ($this->options as $option) {//option two - dimensional array kind of  [[option1] [option2] ] where option=['value'=>1,'text'=>'one']
            $this->html .= sprintf("<option value='%s'> %s </option>", $option['value'], $option['text']) . PHP_EOL;
        }
        $this->html .= "</select>";
        $this->html='<p>'.$this->html.'</p>';
    }

    public function getSelect(): string
    {
        $this->buildElement();
        return $this->html . PHP_EOL;
    }

}