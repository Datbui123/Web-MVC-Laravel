<?php
include "models/DBConfig.php";
    
$db = new Database;
$db->connect();

$controller = isset($_GET['controller'])?$_GET['controller']:'thanhvien';
$action     = isset($_GET['action'])?$_GET['action']:'list';



$controllerPath = 'controllers/thanhvien/'.$controller.'.php';

if(!file_exists($controllerPath)){
     die('Tệp tin không tồn tại');
 }

require($controllerPath);

// // Khởi tạo đối tượng tương ứng của Controller và gọi hàm xử lý Action
// $myObj = new $controller();
// $myObj->$action();
?>
