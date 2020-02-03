<?php
namespace Controller;

use Model\Product;
use Model\ProductDB;
use Model\DBConnection;

class ProductController {
    public $productDB;

    public  function __construct()
    {
        $connect = new DBConnection("mysql:host=localhost;dbname=bt_mvc_sanpham","root",'');
        $this->productDB = new ProductDB($connect->connect());
    }

    public function show() {
        $products = $this->productDB->getAll();
        include './mvc/views/list.php';
    }

    public function add() {
        if($_SERVER['REQUEST_METHOD'] == "GET") {
            include './mvc/views/add.php';
        } else {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $describes = $_POST['describes'];
            $publisher = $_POST['publisher'];

            $product = new Product($name,$price,$describes,$publisher);
            $this->productDB->create($product);
            $message = 'Customer created';
            include "./mvc/views/add.php";
        }
    }
}

?>