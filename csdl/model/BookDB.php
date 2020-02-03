<?php

namespace Model;

class BookDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `books`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $books = [];
        foreach ($result as $row) {
            $book = new book($row['name'], $row['describes'], $row['status']);
            $book->id = $row['id'];
            $books[] = $book;
        }

        return $books;
    }

    public function create($book)
    {
        $sql = "INSERT INTO books(name, describes, status) VALUES(?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $book->name);
        $statement->bindParam(2, $book->describe);
        $statement->bindParam(3, $book->status);
        return $statement->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM books WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $book = new Book($row['name'], $row['describes'], $row['status']);
        $book->id = $row['id'];
        return $book;
    }

//    public function delete($id)
//    {
//        $sql = "DELETE FROM books "
//    }
}