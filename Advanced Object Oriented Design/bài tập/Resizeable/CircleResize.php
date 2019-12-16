<?php
include_once "Circle.php";
include_once "Resizeable.php";

class CircleResize implements Resizeable
{
    public function reszie($circle1, $per)
    {
        $radius1 = $circle1->radius;
        $circle1->radius = $radius1 * (1 + $per / 100);

        return $circle1;
    }
}

?>