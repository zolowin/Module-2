<?php
    class QuadracticEquation {
        private $a;
        private $b;
        private $c;

        public function __construct($a, $b, $c) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        public function get_a() {
            return $this->a;
        }
        
        public function get_b() {
            return $this->b;
        }

        public function get_c() {
            return $this->c;
        }

        public function getDiscriminant() {
            return $this->b ** 2 - 4 * $this->a * $this->c;
        }

        public function getRoot1() {
            return (-($this->b) + sqrt($this->getDiscriminant())) / 2 * $this->a;
        }

        public function getRoot2()
        {
            return (-$this->b - sqrt($this->getDiscriminant())) / 2 * $this->a;
        }
        public function getRoot3()
        {
            return -$this->b / (2 * $this->a);
        }
        public function getRoot()
        {
            try {
                echo "Delta = " . $this->getDiscriminant() . "<br/>";
                if ($this->getDiscriminant() >= 0) {
                   "Phương trình có 2 nghiệm " . $this->getRoot1() . " và " . $this->getRoot2();
                }
                if ($this->getDiscriminant() === 0) {
                    return "Phương trình có nghiệm kép " . $this->getRoot3();
                } else {
                    throw new Exception( "Phương trình vô nghiệm");
                }
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }
?>