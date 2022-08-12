<?php
require_once 'Form.php';

echo '<pre>';

$form = new Form('first', 'post');

$form->addInpute("text", "name",'Имя');

$form->addSubmit("Отправить");

$html = $form->buildForm();

echo $html;