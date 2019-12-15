<?php
 include "class_lib.php";
 StopWatch::start();
 $arr = [];
 for ($i = 0; $i < 100000; $i++) {
   $arr[$i] = $i;
 }
 echo "Elapsed time: " . StopWatch::elapsed() . " seconds";
?>