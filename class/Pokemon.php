<?php


abstract class Pokemon{

    private $name;
    private $health;
    private $maxhealth;

    protected $type;
    protected $attacks;
    protected $weakness;
    protected $resistance;

    static $population;

	public function __construct($name , $maxhealth) {
        $this -> name = $name;  
        $this -> maxhealth = $maxhealth;
        $this -> health = $maxhealth; 
        
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

    public function getHealth()
    {
        return $this->health;
    }
    public function getMaxHealth()
    {
        return $this->maxhealth;
    }

}

