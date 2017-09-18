<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author ANTHONY
 */
class Article {
    function HomepageGather(){
        include_once('Controllers/art.php');
        $home = new art();
        return $home->GatherDataForHome();
        
    }
    function ArticleById($id){
        include_once 'Controllers/art.php';
        $by_id = new art();
        return $by_id->GetById($id);
    }
    function ArticleByCat($cat){
        include_once 'Controllers/art.php';
        $by_cat = new art();
        return $by_cat->GetByCat($cat);
    }
}
