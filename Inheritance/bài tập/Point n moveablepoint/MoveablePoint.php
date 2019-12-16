<?php
include_once "Point.php";

class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;

    public function __construct($x = 0.0, $y = 0.0, $xSpeed = 0.0, $ySpeed = 0.0)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return float
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param float $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return array($this->xSpeed, $this->ySpeed);
    }

    public function __toString()
    {
        return parent::__toString() . " speed($this->xSpeed,$this->ySpeed)";
    }

    public function move()
    {
        parent::setX(parent::getX() + $this->xSpeed);
        parent::setY(parent::getY() + $this->ySpeed);
        return $this;

    }
}

?>