<?php
error_reporting(E_ALL);
require_once 'Model/Pages.php';
require_once 'db/DbConnect.php';

$view = new Pages();
if (!isset($_GET['page'])) {
    $_GET['page'] = 'home';
}
if(isset($_GET['meta'])){
    $page_info = [$_GET['meta'],$_GET['meta_image'],$_GET['meta_author']];
}else{
    $page_info = ['inside the mind of a sleepwalking insomniac','images/den_img_3.jpg','Denise Roberts'];
}

$_SESSION['admin_in'] = false; 
$_SESSION['user_in'] = false;


$pageName = $_GET['page'];
$pageLoc =  $_GET['page'];
$pageStyle = 'css/'.$_GET["page"].'.css';

    
$view->ShowPage('header',$pageName,$pageStyle,$page_info);
$view->ShowPage($pageLoc);
$view->ShowPage('footer');


