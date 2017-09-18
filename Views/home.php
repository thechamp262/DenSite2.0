<?php 
    include('Model/home.php');
    
    $home_article = new home;
    $info = $home_article->ArticleGather();
?>
<h1 id='main_header' class='home_top_font'>Background Thoughts</h1>
            <h3 id='owner_name' class='home_top_font'>By Denise Roberts</h3>
            <img alt='This is a black and white image' width='10' height='10' src="images/den_img_3.jpg"/>
        </div> 
        <div id="container">
    <section id="home_section_main" class="main_section">
         <section class='content_float' id='left_content'>
            <?php 
                foreach($info as $row){
                    if($row['home_position'] === 'left_article'){                                                                                                                                                                                                                                                                   
                echo '<article id="'.$row['id'].'" class="'.$row['home_position']. ' enter"><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'"><h2>'.$row['name'].'</h2></a><p>'.$row['date'].'</p><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'&meta='.$row['preview'].'&meta_image='.$row['image_url'].'&meta_author='.$row['author'].'"><img src="'.$row['image_url'].'" alt="this is an image"/></a>';        
                }
                }
            ?>
          </section>
        <section class='content_float' id='middle_content'>
             <?php 
                foreach($info as $row){
                    if($row['home_position'] === 'middle_article'){
                echo '<article id="'.$row['id'].'" class="'.$row['home_position']. ' enter"><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'"><h2>'.$row['name'].'</h2></a><p>'.$row['date'].'</p><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'&meta='.$row['preview'].'&meta_image='.$row['image_url'].'&meta_author='.$row['author'].'"><img src="'.$row['image_url'].'" alt="this is an image"/></a>';        
                }
                }
            ?>
        </section>
        <section class='content_float' id='right_content'>
            <?php 
                foreach($info as $row){
                    if($row['home_position'] === 'right_article'){
                echo '<article id="'.$row['id'].'" class="'.$row['home_position']. ' enter"><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'"><h2>'.$row['name'].'</h2></a><p>'.$row['date'].'</p><a href="index.php?page=article&id='.$row['id'].'&cat='.$row['cat'].'&name='.$row['name'].'&meta='.$row['preview'].'&meta_image='.$row['image_url'].'&meta_author='.$row['author'].'"><img src="'.$row['image_url'].'" alt="this is an image"/></a>';        
                }
                }
            ?>
        </section>
    </section>