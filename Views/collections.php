<?php
require 'Model/Article.php';
require_once 'Model/catagory.php';

$sel_collections = new catagory();
$collections_sel = $sel_collections->CollectionsPageGather($_GET["id"]);
$article = new Article();
$art_show = $article->ArticleByCat($_GET["id"]);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

    <h1 id='main_header' class='home_top_font'><?php echo $collections_sel[0]['name']; ?></h1>
    <h3 id='owner_name' class='home_top_font'>By Denise Roberts</h3>
    <img alt='This is a black and white image' width='10' height='10' src="<?php echo $collections_sel[0]['image_url']; ?>"/>
</div> 
<div id="container">
    <section class='content_float' id='left_content'>
        <?php 
            foreach($art_show as $row){
                echo '<article id="'.$row['id'].'" class="'.$row['home_position']. ' enter"><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'"><h2>'.$row['name'].'</h2></a><p>'.$row['date'].'</p><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'&meta='.$row['preview'].'&meta_image='.$row['image_url'].'&meta_author='.$row['author'].'"><img src="'.$row['image_url'].'" alt="this is an image"/></a></article>';        
            }
        ?>
    </section>

