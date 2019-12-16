<?php
include_once "Square.php";
include_once "Resizeable.php";

class SquareResize implements Resizeable {
    public function reszie($square1, $per)
    {
        $width1 = $square1->width;
        $square1->width = $width1 * (1 + $per/100);
        $square1->height = $square1->width;
        return $square1;
    }
}


?>