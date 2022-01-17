<?php

require_once('./ConnexionBd.php');

$instance = ConnexionBd::getInstance();
$conn = $instance->getConnexion();
var_dump($instance);
var_dump($conn);



$instance1 = ConnexionBd::getInstance();
$conn1 = $instance1->getConnexion();
var_dump($instance1);
var_dump($conn1);
