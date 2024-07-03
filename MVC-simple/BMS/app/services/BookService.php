<?php
require_once APP_ROOT.'/app/models/Book.php';
class BookService{
    public function getAllBooks(){
            //Buoc 1: ket noi Database
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();

            //Buoc 2: truy van du lieu
            $sql = "SELECT * FROM books";
            $stmt = $conn ->query($sql);

            //Buoc 3: xu ly ket qua tra ve
            $books = [];
            while($row = $stmt->fetch()){
                $book = new Book($row['BookID'], $row['Title'], $row['Author'], $row['ISBN'], $row['PublicationDate'], $row['Genre']);
                $books[] = $book;
            }
            return $books;
    }
}