<?php

class attack
{
    public $name;
    public $power;

    public function __construct($name, $power)
    {
        $this->name = $name;
        $this->power = $power;
    }
    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setPower($power)
    {
        return $this->power = $power;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPower()
    {
        return $this->power;
    }
}
