<?php
require_once('../app/config/config.php');
require_once APP_ROOT.('/app/controllers/HomeController.php');

$homeController = new HomeController();
$homeController ->index();

// require_once APP_ROOT.'/app/config/DBConnection.php';
// $controller = isset($_GET['controller'])?$_GET['controller']:'home';
// $action     = isset($_GET['action'])?$_GET['action']:'index';

// if($controller=='home'){
//     require_once APP_ROOT.'/app/controllers/HomeController.php';
//     $homeController = new HomeController();
//     $homeController->index();
// }else if($controller == 'article'){
//     require_once APP_ROOT.'/app/controllers/ArticleController.php';
//     $articleController = new ArticleController();
//     $articleController->index();
// }else{
//     echo "Not Found";
// }
?>