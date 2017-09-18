<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailsController
 *
 * @author ANTHONY
 */


class EmailsController {
    function ContactEmailsToDatabase($name,$email,$message){
      require_once '../db/DbConnect.php';
      $db = new DbConnect();
      $connected = $db->ConnectToDatabase();
      try{
        $sql = 'INSERT INTO contact_us_email_messages(name,email,message) VALUES ("'.$name.'","'.$email.'","'.$message.'")';
        $connected->exec($sql);
        //die();
      } catch (Exception $ex) {
          echo $sql . '<br>' . $ex->getMessage();
      }
      
    }
}
