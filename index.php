<?php
require "autoload.php";

//Create`s a new pokemon
$charmaleon = new Charmeleon("Charmeleon", 60);
$pickachu = new Pikachu("Pikcahu", 60);

//Goes to the static function that creates the battle
Pokemon::constructBattle($charmaleon , $pickachu);

