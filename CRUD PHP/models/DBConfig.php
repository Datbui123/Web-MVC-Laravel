<?php
    class Database{
        private $hostname = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = "quanlythanhvien_mvc";

        private $conn = NULL;
        private $result = NULL;


        // Định nghĩa hàm kết nối database
        public function connect(){
            try {
                $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
            } 
            catch (PDOException $pe) {
                die("Could not connect to the database $dbname:" . $pe->getMessage());
            }
            return $this->conn;
        }

        // Định nghĩa hàm Truy vấn
        public function sqlQuery($sql){
            $this->result = $this->conn->prepare($sql);
            $this->result->execute();
            return $this->result;
        }

        // Định nghĩa phương thức lấy dữ liệu
        public function getData($table, $id){
            $sql = "SELECT hoten, namsinh, quequan FROM $table WHERE id = $id";
            $data = $this->sqlQuery($sql)->fetch();
            return $data;
        }

        // Định nghĩa phương thức lấy tất cả dữ liệu
        public function getAllData($table){
            $sql = "SELECT * FROM $table";
            $data = $this->sqlQuery($sql)->fetchAll();
            return $data;
        }

        // Thêm dữ liệu vào bảng
        public function insertData($hoten, $namsinh, $quequan){
            $sql = "INSERT INTO thanhvien(id, hoten, namsinh, quequan) VALUES (null, '$hoten', '$namsinh', '$quequan')";
            $this->sqlQuery($sql);
        }

        // Sửa dữ liệu bảng
        public function updateData($id, $hoten, $namsinh, $quequan){
            $sql = "UPDATE thanhvien SET hoten = '$hoten', namsinh = '$namsinh', quequan = '$quequan' WHERE id = $id";
            $this->sqlQuery($sql);
            echo "<p style='color:pink; text-center'>Sửa thành công</p>";
           
        }

        // Xóa dữ liệu bảng
        public function deleteData($id){
            $sql = "DELETE FROM thanhvien WHERE id = '$id'";
            $this->sqlQuery($sql);
        }
    }
    

?>