<?php
function reverseArray($arr)
{
    if (empty($arr)) {
        return [];
    }

    if (count($arr) === 1) {
        return $arr;
    }

    $stack = new SplStack();
    for ($i = 0; $i <count($arr); $i ++) {
        $stack->add($i, $arr[$i]);
    }

    $arrResult = [];
    while (count($stack) > 0) {
        array_push($arrResult, $stack->pop());
    }
    return $arrResult;
}

$a = [1,2,3];
var_dump(reverseArray($a));
?>);