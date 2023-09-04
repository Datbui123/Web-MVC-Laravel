<?php
    class Book{

        //properties
        private $bookid;
        private $title;
        private $author;
        private $isbn;
        private $publicationdate;
        private $genre;


        //methods
        public function __construct($bookid, $title, $author, $isbn, $publicationdate, $genre){
            $this->bookid = $bookid;
            $this->title = $title;
            $this->author = $author;
            $this->isbn = $isbn;
            $this->publicationdate = $publicationdate;
            $this->genre = $genre;

        }

        //Getters/Setters

        public function  getBookId(){
            return $this->bookid;
        }
        public function  getTitle(){
            return $this->title;
        }
        public function  getAuthor(){
            return $this->author;
        }
        public function  getISBN(){
            return $this->isbn;
        }
        public function  getPublicationDate(){
            return $this->publicationdate;
        }
        public function  getGenre(){
            return $this->genre;
        }

        public function  setTitle($title){
            return $this->title = $title;
        }
    }

?>