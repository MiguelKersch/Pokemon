<?php

class Pikachu extends Pokemon
{
    public function __construct($name , $maxhealth)
    {
        parent::__construct($name , $maxhealth);

        $this->type = new type("Lightning");
        $this->weakness = new weakness("Fire", 1.5);
        $this->resistance = new resistance("Fighting", 20);
        $this->attacks = array(
            "Thunder Shock" => new attack("Thunder Shock", 50),
            "Quik Attack" => new attack("Quik Attack", 30)
        );
    }
}