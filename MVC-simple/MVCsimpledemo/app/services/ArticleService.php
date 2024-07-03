<?php
require_once APP_ROOT.'/app/models/Article.php';
class ArticleService{
    public function getAllArticle(){
            //Buoc 1: ket noi Database
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            //Buoc 2: truy van du lieu
            $sql = "SELECT * FROM article ORDER BY id DESC";
            $stmt = $conn->query($sql);

            //Buoc 3: xu ly ket qua tra ve
            $articles = [];
            while($row = $stmt->fetch()){
                $article = new Article($row['id'], $row['title'], $row['summary'], $row['content']);
                $articles[] = $article;
            }
            return $articles;
    }
}