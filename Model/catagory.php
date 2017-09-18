<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of catagory
 *
 * @author ANTHONY
 */
class catagory {
    function ArticleGather($sel){
        include_once 'Controllers/Collections.php';
        $cat = new Collections();
        return $cat->GatherArticle($sel);
    }
    function GrabAllForNav(){
        include_once 'Controllers/Collections.php';
        $cat = new Collections();
        return $cat->NavList();
    }
    function CollectionsPageGather($id){
        include_once 'Controllers/Collections.php';
        $cat = new Collections();
        return $cat->GatherForCollectionsPAge($id);
    }
}
