<?php

namespace Controller;

use Model\DBConncection;
use Model\Customer;
use Model\CustomerDB;

class CustomerController
{
    public $customerDB;

    function __construct()
    {
        $connection = new DBConncection("mysql:host=localhost;dbname=thuchanh", "root", "");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include "views/add.php";
        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $customer = new Customer($name, $email, $address);
            $this->customerDB->create($customer);
            $message = "thêm thành công";
            include "views/add.php";
        }
    }

    function index()
    {
        include "index.php";
    }
}