<?php
include_once "aAnimal.php";
include_once "iEdible.php";

class Chicken extends Animal implements Edible
{
    function makeSound()
    {
        return "cluck-cluck!";
    }

    function howToEat()
    {
        return "could be fried";
    }
}
?>
