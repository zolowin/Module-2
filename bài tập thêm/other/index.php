<?php
require "Arraylist.php";
$a = ["a", "b", "c"];
$n = new Arraylist($a);
$n->add("e");
$n->addAtPos("d", 3);
$n->addAtPos("g",3);
$n->removeByIndex(3);
var_dump($n);

?>