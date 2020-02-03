<?php

namespace Model;

class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer){
        $sql = "SELECT INTO customers(name, email, address) VALUES(?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,'$customer->name');
        $stmt->bindParam(1,'$customer->email');
        $stmt->bindParam(1,'$customer->address');
        return $stmt->execute();
    }
}