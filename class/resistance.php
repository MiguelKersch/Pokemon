<?php

    class resistance
    {
        private $type;
        private $multiplier;

        public function __construct($type, $multiplier)
        {
            $this->type = $type;
            $this->multiplier = $multiplier;
        }
        
        public function setResistance($type)
        {
            return $this->$type;
        }

        public function setMultiplier($multiplier)
        {
            return $this->$multiplier;
        }

        public function getResistance()
        {
            return $this->type;
        }

        public function getMultiplier()
        {
            return $this->multiplier;
        }
    }
