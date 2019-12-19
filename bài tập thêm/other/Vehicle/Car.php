<?php
include_once "Vehicle.php";

class Car extends Vehicle {
    protected $hasTrunk;
    protected $owner;

    public function __construct($type, $hasTrunk= null)
    {
        parent::__construct($type);
        $this->hasTrunk = $hasTrunk;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function getHasTrunk(): bool
    {
        return $this->hasTrunk;
    }

    public function setHasTrunk(bool $hasTrunk)
    {
        $this->hasTrunk = $hasTrunk ;
        return $this;
    }
}
?>