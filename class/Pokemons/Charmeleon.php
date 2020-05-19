<?php

class Charmeleon extends Pokemon
{
    public function __construct($name , $maxhealth)
    {
        parent::__construct($name , $maxhealth);

        $this->type = new type("Fire");
        $this->weakness = new weakness("Water", 2.0);
        $this->resistance = new resistance("Lightning", 10);
        $this->attacks = array(
            "Tackle" => new attack("Tackle", 10),
            "Ember" => new attack("Ember", 30)
        );
    }

}