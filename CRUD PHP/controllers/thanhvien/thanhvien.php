<?php

$noti_addnew = array();
switch($action){
    case 'add':{
        $name = '';
        if(isset($_POST['add_user'])){
            $hoten = $_POST['hoten'];
            $namsinh = $_POST['namsinh'];
            $quequan = $_POST['quequan'];
            $db->insertData($hoten, $namsinh, $quequan);
            $name = "<p style='color:pink; text-center'>Thêm thành công ".$hoten."</p>";
            
        }
        require_once('views/thanhvien/add_user.php');
        echo $name;
        break;
        
    } 
    case 'edit':{
        if(isset($_GET['id'])){
           
            $id = $_GET['id'];
            $tbl = "thanhvien";
            $datas = $db->getData($tbl,$id);

            if(isset($_POST['edit_user'])){
                $hoten = $_POST['hoten'];
                $namsinh = $_POST['namsinh'];
                $quequan = $_POST['quequan'];
                $db->updateData($id, $hoten, $namsinh, $quequan);
                header("location: index.php?action=list");
            }
        }
        
        require_once('views/thanhvien/edit_user.php');
        break;
    }
    case 'delete':{
        if(isset($_GET['id'])){
           
            $id = $_GET['id'];
            $tbl = "thanhvien";
            $datas = $db->getData($tbl,$id);
            
            if(isset($_POST['delete_user'])){
            $db->deleteData($id);
            header("location: index.php?action=list");
            };
        }


        require_once('views/thanhvien/delete_user.php');
        break;
    }
    case 'list':{
        $tbl = "thanhvien";
        $datas = $db->getAllData($tbl);

        require_once('views/thanhvien/list_user.php');
        break;
    }
    default:{
        // $tbl = "thanhvien";
        // $datas = $db->getAllData($tbl);
        require_once('index.php');
        break;
    }
}

//$controllerPath = 'controllers/thanhvien/'.$controller.'.php';

// if(!file_exists($controllerPath)){
//     die('Tệp tin không tồn tại');
// }
?>
