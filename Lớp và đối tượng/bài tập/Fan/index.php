<?php
    class Fan {
        const SLOW = 1;
        const MEDIUM = 2;
        const  FAST = 3;
        private  $speed;
        private  $on;
        private  $color;
        private $radius;

        public function  getSpeed(){
            return $this->speed;
        }
        public  function  getOn(){
            return $this->on;
        }
        public function getColor(){
            return $this->color;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function setSpeed($_speed){
            $this->speed = $_speed;
        }
        public function setOn($_on) {
            $this->on = $_on;
        }
        public function setColor($_color) {
            $this->color = $_color;
        }
        public function setRadius($_radius) {
            $this->radius = $_radius;
        }
        public  function  __construct()
        {
            $this->speed = self::SLOW;
            $this->on = false;
            $this->color = 'blue';
            $this->radius = 5;
        }
        public function __toString()
        {
            if($this->getOn()=== true) {
                echo "This fan have speed is $this->speed, color is $this->color, radius is $this->radius. Fan is on";
            } else {
                echo "This fan have color is $this->color, radius is $this->radius. Fan is off";
            }
        }
    }

    $fan1 = new Fan();
    $fan1->setSpeed(Fan::FAST);
    $fan1->setRadius(10);
    $fan1->setColor('yellow');
    $fan1->setOn(true);

    $fan2 = new  Fan();
    $fan2 ->setSpeed(Fan::MEDIUM);
    $fan2 ->setRadius(5);
    $fan2 ->setColor('blue');
    $fan2 ->setOn(false);

    $fan1->__toString();
    echo '<br>';
    $fan2->__toString();
?>