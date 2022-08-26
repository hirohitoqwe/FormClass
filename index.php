<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'vendor/autoload.php';

use mainForm\Form;

use Element\Input;
use Element\Submit;
use Element\TextArea;
use Element\Button;
use \Element\Select;

$form = new Form('first', 'post');

$submit = Submit::getInstance();

$input1 = (new Input('name', 'text', '', ''))->addTitle('Name');

$form->addInput($input1);
$form->addInput((new Input('surname', 'text', '', ''))->addTitle('Surname'));
$form->addTextArea(new TextArea(10, 10, 'text', 'hello world'));
$form->addButton(new Button('knopka', 'jmak',));

$form->addSubmit($submit->addValue('Send'));
$options = [
    ['value' => 1, 'text' => 'hello']
];
$form->addSelect(new Select('somename',$options,0));

$html = $form->buildForm();

echo $html;
?>
//развертка
<select size="">
    <option value="3">Пункт 1</option>
    <option value="3">Пункт 2</option>
</select>
//прокрутка
<select size="3">
    <option value="1">3</option>
    <option value="2">4</option>
    <option value="3">5</option>
</select>
