<?php

    class resistance
    {
        public $type;
        public $multiplier;

        public function __construct($type, $multiplier)
        {
            $this->type = $type;
            $this->multiplier = $multiplier;
        }
        
        public function setType($type)
        {
            return $this->$type;
        }

        public function setMultiplier($multiplier)
        {
            return $this->$multiplier;
        }

        public function getType()
        {
            return $this->type;
        }

        public function getMultiplier()
        {
            return $this->multiplier;
        }
    }
