<?php
namespace Model;

class ProductDB {
    public $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getAll() {
        $sql = "SELECT * FROM product";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $value) {
            $product = new Product($value['name'],$value['price'],$value['describes'],$value['publisher']);
            $product->id = $value['id'];
            $products[] = $product;
        }
        return $products;
    }

    public function create($product) {
        $sql = "INSERT INTO product(name,price,describes,publisher)
                    VALUES  (?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->price);
        $stmt->bindParam(3, $product->descirbes);
        $stmt->bindParam(4, $product->publisher);
        return $stmt->execute();

    }
}
