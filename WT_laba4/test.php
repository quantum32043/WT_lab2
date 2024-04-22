<?php
require_once 'task1.php';
require_once 'task2.php';

$safeFormBuilder = new SafeFormBuilder(SafeFormBuilder::METHOD_POST, '/destination.php', 'Send!');
$safeFormBuilder->addTextField('someName', 'Default value');
$safeFormBuilder->addRadioGroup('someRadioName', ['A', 'B']);
echo $safeFormBuilder->getForm();
