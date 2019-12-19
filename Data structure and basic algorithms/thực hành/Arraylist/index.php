<?php

include "ArrayList.php";
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
echo $listInteger->get(2);
echo "<br>";
echo $listInteger->get(6);