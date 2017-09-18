<?php
require_once 'Model/catagory.php';

$nav_list = new catagory();
$nav = $nav_list->GrabAllForNav();
?>
<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <title><?php  if($pageHeader === 'article'){echo 'collections' ;}else{echo $pageHeader; }; ?> | background thoughts</title>
        <link href='https://fonts.googleapis.com/css?family=Yantramanav:100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Palanquin:600' rel='stylesheet' type='text/css'>
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="<?php echo $pageCss?>">
        <meta property="og:" content="">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php if(isset($_SERVER['REQUEST_URI'])){echo $_SERVER['REQUEST_URI'];}else{echo 'URL';}?>">
        <meta property="og:description" content="<?php echo $page_info[0];?>">
        <meta property="og:image" content="<?php echo $page_info[1];?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <meta name="description" content="<?php echo $page_info[0];?>">
        <meta name="author" content="<?php echo $page_info[2];?>">
        <meta name="image" content="<?php echo $page_info[1];?>">
        <meta name="keywords" content="Poems,Written,Writing,Orignial,Stories,Poem Collections">
    </head>
    <body>
        <div id="left_float">
            <nav id='main_nav'>          
                <ul id='nav_ul'>
                    <li id="sel_page"><a class="nav" href="index.php?page=home">home</a></li>
                    <li id="collection_nav"><a class="nav">collections</a>
                        <ul id="collection_nav_drop_ul">
                            <?php
                            foreach($nav as $row){
                                echo '<li class="collection_nav_li nav"><a href="index.php?page=collections&id='.$row['id'].'&meta='.$row['name'].'&meta_image='.$row['image_url'].'&meta_author=Denise Roberts">'.$row['name'].'</a></li>';        
                            }
                            ?>
                        </ul>
                    </li>
                    <li><a class="nav" href="index.php?page=about">about</a></li>
                    <li><a hidden="" class="nav" href="index.php?page=contact">contact</a></li>
                </ul>
                <p>Background Thoughts</p>
                <ul id='nav_icons'>
                    <li><a href="https://twitter.com/iSeekSimplicity"><img alt="twitter icon" src='https://dl.dropbox.com/s/pxztg3t1724y0g8/icon1.png?dl=0'/></a></li>
                    <li><a href=""><img alt="google plus icon" src='https://dl.dropbox.com/s/07inej361ciuuq6/icon2.png?dl=0'/></a></li>
                    <li><a href="https://www.facebook.com/Backgroundthoughts/?notif_t=fbpage_fan_invite"><img alt="facebook icon" src='https://dl.dropbox.com/s/c8dvfl53946egwe/icon3.png?dl=0'/></a></li>
                </ul>
            </nav>
            

        