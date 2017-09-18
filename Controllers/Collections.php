<?php
require_once 'db/DbConnect.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Collections
 *
 * @author ANTHONY
 */
class Collections {
    function GatherArticle($cat){
       $db = new DbConnect();
       $connect = $db->ConnectToDatabase();
      try{
        $sql = "SELECT * From cat WHERE id='$cat'";
        $stmt  = $connect->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
       // var_dump($results);
        return $results[0]['name'];
      } catch (PDOException $ex) {
          echo $sql . '<br>' . $ex->getMessage();
      }
    }
    function NavList(){
       $db = new DbConnect();
       $connect = $db->ConnectToDatabase();
      try{
        $sql = "SELECT * From cat";
        $stmt  = $connect->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
       // var_dump($results);
        return $results;
      } catch (PDOException $ex) {
          echo $sql . '<br>' . $ex->getMessage();
      }
    }
    function GatherForCollectionsPAge($id){
        $db = new DbConnect();
       $connect = $db->ConnectToDatabase();
      try{
        $sql = "SELECT * From cat WHERE id='$id'";
        $stmt  = $connect->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
       // var_dump($results);
        return $results;
      } catch (PDOException $ex) {
          echo $sql . '<br>' . $ex->getMessage();
      }
    }
}

