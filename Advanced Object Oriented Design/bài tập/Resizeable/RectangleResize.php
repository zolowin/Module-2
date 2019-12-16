<?php
include_once "Rectangle.php";
include_once "Resizeable.php";

class RectangleResize implements Resizeable {

    public function reszie($rectangle1, $per)
    {
     $width1 = $rectangle1->width;
     $height1 = $rectangle1->height;
     $rectangle1->width = $width1 * $per /100 + $width1;
     $rectangle1->height = $height1 * $per /100 + $height1;

     return $rectangle1;
    }
}

?>