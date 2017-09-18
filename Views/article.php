<?php
    require 'Model/Article.php';
    require_once  'Model/catagory.php';
    $article = new Article();
    $collection = new catagory;
    $art = $article->ArticleById($_GET["id"]);
    $cat = $article->ArticleByCat($_GET["cat"]);
    $sel = $collection->ArticleGather($_GET["cat"]);
   
?>
</div>
        <div id="container"> 
            <section id="art_header">
                <?php
                    foreach($art as $row){
                        echo '<h2>'.$row['name'].'</h2><p id="name_data">'.$row['date'].' | '.$row['author'].' | Category: <a class="cat_link" href="index.php?page=collections&id='.$_GET["cat"].'">'.$sel.'</a><br><a class="fb-share-button" data-href="'.$_SERVER['REQUEST_URI'].'" data-layout="button_count"></a></p><p id="small_sample"><span class="quotes">"</span>'.$row['preview'].'<span class="quotes">"</span></p><img src="'.$row['image_url'].'" alt="this is an image"/>';        
                    }
                ?>
                
            </section>
            <article id="main_article">
                <?php
                    foreach($art as $row){
                        echo '<p>'.$row['body'].'</p>';        
                    }
                ?>
            </article>
        </div>
        <footer id="article_footer">
            <h3 id="suggested_art">Suggested Poems</h3>
            <section id='footer_sec'>
             <?php
                    foreach($cat as $row){
                        if($row['id'] !== $_GET["id"]){
                            echo '<div class="cat_suggest"><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'"><h6 id="sugg_name">'.$row['name'].'</h6></a><p id="sugg_date">'.$row['date'].'</p><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'&meta='.$row['preview'].'&meta_image='.$row['image_url'].'&meta_author='.$row['author'].'"><img id="sugg_img" src="'.$row['image_url'].'" alt="This is an img"/></a></div>';   
                        }                               
                    }
            ?>
            </section>
        </footer>
