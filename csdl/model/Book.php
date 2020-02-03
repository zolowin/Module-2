<?php
namespace Model;

class Book {
    public $id;
    public $name;
    public $describes;
    public $status;
    public $categoryID;

    public function __construct($name,$describes,$status=true)
    {
        $this->name = $name;
        $this->describes = $describes;
        $this->status = $status;
    }
}