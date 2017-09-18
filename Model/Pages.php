<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 *
 * @author ANTHONY
 */
class Pages {
    function ShowPage($template, $pageHeader = 'Home', $pageCss = 'css/home.css',$page_info = ''){
        $path = 'Views/'.$template.'.php';
        if(file_exists($path)){
        include($path);  
             
        }//ends file check if statement
    }
}

