<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once 'vendor/autoload.php';
use mainForm\Form;

use Element\Input;
use Element\Submit;

echo '<pre>';

$form = new Form('first', 'post');

$form->addInpute(new Input('name', 'text', '', '123'));
$form->addSubmit(new Submit('Отправить'));
$html = $form->buildForm();

echo $html;