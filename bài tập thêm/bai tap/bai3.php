<?php
function isFA($queue1, $queue2)
{
    while (!$queue1->isEmpty() && !$queue2->isEmpty()) {
        echo "Noob ".$queue1->dequeue()." & Mrs.".$queue2->dequeue();
        echo "<br>";
    }

    if(!$queue1->isEmpty()) {
        echo "<br>";
        echo "Noob ".$queue1->dequeue()." waiting";
    }   else if(!$queue2->isEmpty()) {
        echo "<br>";
        echo "Mrs.".$queue2->dequeue()." waiting!";
        echo "<br>";
        echo "Superhero Hoàng Anh Tân is comming!!";
    }
}

$male = new SplQueue();
$male->push('Đông');
$male->push('Trí');
$male->push('Văn');
$male->push('Hữu');

$female = new SplQueue();
$female->push('Happy Pola');
$female->push('Ngân 98');
$female->push('Bella');
$female->push('Cẩm Lan');
$female->push('Wendy');
$female->push('Địch Lệ Nhiệt Ba');
isFA($male, $female);

?>
