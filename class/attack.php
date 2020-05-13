<?php

    class attack 
    {
        private $type;
        private $power;

        public function __construct($type, $power) {
            $this -> name = $type;  
            $this -> power = $power;
        }
        public function setAttackType($type)
        {
            return $this->$type;
        }

        public function setPower($power)
        {
            return $this->$power;
        }

        public function getAttackType()
        {
            return $this->type;
        }

        public function getPower()
        {
            return $this->power;
        }
    }