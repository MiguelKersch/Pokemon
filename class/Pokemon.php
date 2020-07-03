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

    public function setHealth($health)
    {
        return $this->health = $health;
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

    /**
    * Gets the needed information to execute 
    * the battle and then calculates the damage dealt
    *   
    * @param Pokemon $target
    * @param attack $attack
    */
    public function battle($target, $attack)
    {
        $AttackType = $this->getType()->getName();
        $TargetWeakness = $target->getWeakness()->getType();
        $TargetResistance = $target->getResistance()->getType();

        $WeaknessMultiplier = $target->getWeakness()->getMultiplier();
        $ResistanceValue = $target->getResistance()->getValue();

        if ($TargetWeakness == $AttackType) {
            $damage = $attack->getPower() * $WeaknessMultiplier;
        } elseif ($TargetResistance == $AttackType) {
            $damage = $attack->getPower() - $ResistanceValue;
        } else {
            $damage = $attack->getPower();
        }
        $target->damage($damage);
    }
    /**
     * Undocumented function
     *
     * @param int $damage
     * @return void
     */
    public function damage($damage)
    {
        $this->setHealth($this->health - $damage);

        if ($this->health <= 0) {
            self::$population--;
        }
    }
    /** 
    * Prints the battle
    *   
    * @param Pokemon $yourPokemon
    * @param Pokemon $opponent
    * @param Boolean $pokemonDefeat
    */
    static function constructBattle($yourPokemon, $opponent)
    {
        $pokemonDefeat = false;
        while ($pokemonDefeat == false) {

            print $yourPokemon->name . "'s health is " . $yourPokemon->getHealth() . "<br>";
            print $opponent->name . " uses Thunder Schock <br>";
            $opponent->battle($yourPokemon, $opponent->getAttack()["Thunder Shock"]);
                if ($yourPokemon->getWeakness()->getType() == $opponent->getType()) {
                    print "its very effective <br>";
                } elseif ($yourPokemon->getResistance()->getType() == $opponent->getType()) {
                    print "its not very effective <br>";
                }
            print $yourPokemon->name . "hp is now " . $yourPokemon->getHealth() . "<br>";
            print "<br>";

                if ($yourPokemon->health <= 0) {
                    print "<br> There are " . Pokemon::$population . " Pokemons in the world";
                    $pokemonDefeat = true;
                    return;
                }

            print $opponent->name . "`s health is " . $opponent->getHealth() . "<br>";
            print $yourPokemon->name .  " uses Ember <br>";
            print "its super effective ";
            $yourPokemon->battle($opponent, $yourPokemon->getAttack()["Ember"]);
                if ($opponent->getWeakness()->getType() == $yourPokemon->getType()) {
                    print "its very effective <br>";
                } elseif ($opponent->getResistance()->getType() == $yourPokemon->getType()) {
                    print "its not very effective <br>";
                }
            print $opponent->name . "`s hp is now " . $opponent->getHealth() . "<br>";
            print "<br> There are " . Pokemon::$population . " Pokemon in the world <br>";
            print "<br>";

            if ($opponent->health <= 0) {
                print "<br> There are " . Pokemon::$population . " Pokemon in the world";
                $pokemonDefeat = true;
                return;
            }
        }
    }
}
