<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once 'vendor/autoload.php';
use mainForm\Form;

use Element\Input;
use Element\Submit;

echo '<pre>';

$form = new Form('first', 'post');

$input1=(new Input('name', 'text', '', ''))->addTitle('zalupa');

$form->addInpute($input1);
$form->addInpute(new Input('sename', 'password', '', ''));
$form->addSubmit(new Submit('Отправить'));
$html = $form->buildForm();

echo $html;