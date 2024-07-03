<?php
    class ArticleService{
        // Chứa các hàm tương tác và xử lý dữ liệu

        public function getAllArticles(){
            // Bước 01: Kết nối DB Server
            try {
                $conn = new PDO('mysql:host=localhost;dbname=demo_;port=3306','root','');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            // Bước 02: Truy vấn DL
            $sql = "SELECT * FROM article INNER JOIN category ON article.category_id=category.id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Bước 03: Trả về dữ liệu
            $articles = $stmt->fetchAll();
            // Sửa ở đây; Trả về 1 danh sách (Mảng) các ĐỐI TƯỢNG Article;

            return $articles;
        }
    }

?>