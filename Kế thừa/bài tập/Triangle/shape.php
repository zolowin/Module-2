<?php
    class Shape {
        private $name;

        public  function  __construct($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        public function  show() {
            echo "Shape is $this->name";
        }
    }
?>