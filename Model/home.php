<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author ANTHONY
 */
class home {
    function ArticleGather(){
        include_once('Article.php');
        $article = new Article();
        return $article->HomepageGather();
        
    }
}
