<?php

    class type 
    {
        private $type;
     
        public function __construct($type) {
            $this -> type = $type;  
        }

        public function getType()
        {
            return $this->type;
        }
        public function setType($type)
        {
            return $this->$type;
        }
    }