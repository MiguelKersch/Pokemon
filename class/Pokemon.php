<?php


abstract class Pokemon
{

    private $name;
    private $health;
    private $maxhealth;

    protected $type;
    protected $attacks;
    protected $weakness;
    protected $resistance;

    static $population;

    public function __construct($name, $maxhealth)
    {
        $this->name = $name;
        $this->maxhealth = $maxhealth;
        $this->health = $maxhealth;

        self::$population++;
    }

    static function getPopulation()
    {
        return self::$population;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getMaxHealth()
    {
        return $this->maxhealth;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getAttack()
    {
        return $this->attacks;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getResistance()
    {
        return $this->resistance;
    }
    public function getWeakness()
    {
        return $this->weakness;
    }
}
