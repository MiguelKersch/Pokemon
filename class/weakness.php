<?php

    class weakness 
    {
        private $type;
        private $multiplier;

        public function __construct($type, $multiplier) {
            $this -> type = $type;  
            $this -> multiplier = $multiplier;
        }
        public function getWeakness()
        {
            return $this->type;
        }

        public function getMultiplier()
        {
            return $this->multiplier;
        }
        public function setWeakness($type)
        {
            return $this->$type;
        }
        public function setMultiplier($multiplier)
        {
            return $this->$multiplier;
        }
    }