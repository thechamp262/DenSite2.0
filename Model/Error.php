<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error
 *
 * @author ANTHONY
 */
class Error {
    function MissingFormInfo($name,$email,$message){
//        echo 'Your name is '.$name . 'Your email is ' . $email . 'and your message is ' . $message;
    if(!$name && $email && $message){
        echo 'Please Enter Your Name';    
    }elseif (!$email && $name && $message) {
        echo 'Please Enter Your Email Address';
    }elseif (!$message && $email && $name) {
        echo 'Please Enter Your Message';
    }elseif(!$name && !$email && $message){
        echo 'Please Enter Your Name and Email Address';
    }elseif(!$name && !$message && $email){
        echo 'Please Enter Your Name and Message';
    }elseif(!$email && !$message && $name){
        echo 'Please Enter Your Email Address and Message';
    }elseif (!$name && !$email && !$message) {
        echo 'Please Enter Your Name, Email Address, and Message';
    }
    }
}
