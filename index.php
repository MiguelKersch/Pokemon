<?php
require "autoload.php";

$charmaleon = new Charmeleon("testCharmeleon", 60);
$pickachu = new Pikachu("testPikcahu", 60);





echo "<br>" . Pokemon::$population;
echo "<br>" . $charmaleon->getName();
echo "<br>" . $charmaleon->getHealth();
echo "<br>" . $charmaleon->getMaxHealth();
echo "<br>" . $charmaleon->getType()->type;
echo "<br>" . $charmaleon->getWeakness()->type;
echo "<br>" . $charmaleon->getResistance()->type;
var_dump($charmaleon->getAttack()["Ember"]->power);