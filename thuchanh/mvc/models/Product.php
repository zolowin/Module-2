<?php
namespace Model;

class Product {
    public $id;
    public $name;
    public $price;
    public $describes = '';
    public $publisher;

    function __construct($name,$price,$publisher,$describes)
    {
        $this->name = $name;
        $this->price = $price;
        $this->describes = $describes;
        $this->publisher = $publisher;
    }
}