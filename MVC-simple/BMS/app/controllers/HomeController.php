<?php
require_once APP_ROOT.'/app/services/BookService.php';

class HomeController{
    public function index(){
        //goi du lieu tu BookService
        $bookService = new BookService();
        $books = $bookService->getAllBooks();
        //render du lieu lay duoc ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }

}