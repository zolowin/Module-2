<?php
    class Shape {
        private $name;

        public  function  __construct($name)
        {
            $this->name = $name;
        }

        public function  show() {
            echo "Shape is $this->name";
        }
    }
?>