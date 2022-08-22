<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'vendor/autoload.php';

use mainForm\Form;

use Element\Input;
use Element\Submit;
use Element\TextArea;

$form = new Form('first', 'post');

$submit = Submit::getInstance();

$input1 = (new Input('name', 'text', '', ''))->addTitle('Name');

$form->addInpute($input1);
$form->addInpute((new Input('surname', 'text', '', ''))->addTitle('Surname'));
$form->addTextArea(new TextArea(10,10,'text','hello world'));


$form->addSubmit($submit->addValue('Send'));


$html = $form->buildForm();

echo $html;