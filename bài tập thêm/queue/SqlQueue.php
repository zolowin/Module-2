<?php
//include_once "ArrayAccess.php";
//include_once "Countable.php";
//include_once "Iterator.php";

class SqlQueue extends SplDoublyLinkedList implements Iterator, ArrayAccess, Countable
{
//    protected

    public function __construct()
    {
        parent::IT_MODE_FIFO;
    }

    public function dequeue() {
        array_shift();
    }

    public function enqueue($value) {
        array_push();
    }

//    public function
}
$n = new SplDoublyLinkedList();
$n1 = new SqlQueue();
$n1->enqueue(1);
$n1->enqueue(2);
$n1->enqueue(3);
$n1->dequeue();

var_dump($n1);
?>