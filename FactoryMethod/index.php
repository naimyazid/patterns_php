<?php

require_once('./ProductCommand.php');

$command = new ProductCommand();
$command->command('a');
$command->command();

var_dump($command->getProdCmd());
