<?php

    class resistance
    {
        public $type;
        public $value;

        public function __construct($type, $Value)
        {
            $this->type = $type;
            $this->value = $Value;
        }
        
        public function setType($type)
        {
            return $this->type = $type;
        }

        public function setValue($Value)
        {
            return $this->value = $Value;
        }

        public function getType()
        {
            return $this->type;
        }

        public function getValue()
        {
            return $this->Value;
        }
    }
