<?php

include ('monster.php');
include ('vampire.php');
include ('subclass.php');

$bash = new Vampire("Vampire");
$bash->attack();
$bash->attack();

$msub = new Subclass("Ghost");
$msub->attack();