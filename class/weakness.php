<?php

class weakness
{
    private $type;
    private $multiplier;

    public function __construct($type, $multiplier)
    {
        $this->type = $type;
        $this->multiplier = $multiplier;
    }
    public function getType()
    {
        return $this->type;
    }

    public function getMultiplier()
    {
        return $this->multiplier;
    }
    public function setType($type)
    {
        return $this->type = $type;
    }
    public function setMultiplier($multiplier)
    {
        return $this->multiplier = $multiplier;
    }
}
