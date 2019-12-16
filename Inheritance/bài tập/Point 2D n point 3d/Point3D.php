<?php
    include_once "Point2D.php";

    class Point3D extends Point2D
    {
        private $z;

        public function __construct($x = 0.0, $y = 0.0, $z = 0.0)
        {
            parent::__construct($x, $y);
            $this->z = $z;
        }

        public function getZ()
        {
            return $this->z;
        }

        public function setZ($z)
        {
            $this->z = $z;
        }

        public function setXYZ($x, $y, $z)
        {
            parent::setXY($x, $y);
            $this->z = $z;
        }

        public function getXYZ()
        {
            return array(parent::getX(), parent::getY(), $this->z);
        }

        public function __toString()
        {
            return "(" . parent::getX() . "," . parent::getY() . ",$this->z)";
        }
    }
?>
