<?php
require "autoload.php";

$charmaleon = new Charmeleon("testCharmeleon", 60);
$pickachu = new Pikachu("testPikcahu", 60);


    $pickachu->battle($charmaleon, $pickachu->getAttack()["Thunder Shock"]);

    echo "pikachu uses thunder schock <br>";
    echo "Charmeleon`s hp is now " . $charmaleon->getHealth();

    $charmaleon->battle($pickachu, $charmaleon->getAttack()["Ember"]);
    echo "<br>";
    echo "<br> Charmeleon uses Ember <br>";
    echo "Pikachu`s hp is now " . $pickachu->getHealth();

echo "<br> There are " . Pokemon::$population . " pokemons in the world";
