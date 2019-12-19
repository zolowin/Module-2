<?php

function isPalindrome($str)
{
    if (empty($str) || strlen($str) === 1) {
        return true;
    }

    $queue = new SplQueue();
    for ($i = 0; $i < strlen($str); $i++) {
        $queue->enqueue($str[$i]);
    }

    $revereString = '';

    while (!$queue->isEmpty()) {
        $revereString .= $queue->pop();
    }
    var_dump($revereString);
    return $str === $revereString;
}

$str = 'abc';

var_dump(isPalindrome($str));
