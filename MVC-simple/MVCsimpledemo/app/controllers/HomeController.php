<?php
require_once APP_ROOT.'/app/services/ArticleService.php';

class HomeController{
    public function index(){
        //goi du lieu tu ArticleService
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticle();
        //render du lieu lay duoc ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }

}