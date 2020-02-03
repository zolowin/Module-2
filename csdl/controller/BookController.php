<?php

namespace Controller;

use Model\Book;
use Model\BookDB;
use Model\DBConnection;

class BookController
{
    public $bookDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=quan_ly_thu_vien", "root", "");
        $this->bookDB = new  BookDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view\add.php';
        } else {
            $name = $_POST['name'];
            $describes = $_POST['describes'];
            $status = $_POST['status'];
            $book = new Book($name, $describes, $status);
            $this->bookDB->create($book);
            $message = 'Created';
            header('Location: index.php');
        }
    }

    public function index()
    {
        $books = $this->bookDB->getAll();
        include "view/list.php";
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD']==='GET') {
            $id = $_GET['id'];
            $book = $this->bookDB->get($id);
            include "view/delete.php";
        }   else {
            $id = $_POST['id'];
            $this->bookDB->delete($id);
            header('Localtion: index.php');
        }
    }
}

?>