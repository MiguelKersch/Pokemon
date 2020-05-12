<?php
require "autoload.php";

$charmaleon = new Charmeleon("testCharmeleon", 60);
$pickachu = new Pikachu("testPikcahu", 60);





echo "<br>" . Pokemon::$population;
echo "<br>" . $charmaleon->getName();
echo "<br>" . $charmaleon->getAttack();
echo "<br>" . $charmaleon->getName();
echo "<br>" . $charmaleon->getName();
echo "<br>" . $charmaleon->getName();