<?php
require_once 'db/DbConnect.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of art
 *
 * @author ANTHONY
 */
class art {
    function GatherDataForHome(){
       $db = new DbConnect();
       $connect = $db->ConnectToDatabase();
      try{
        $sql = 'SELECT * From article';
        $stmt  = $connect->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
       // var_dump($results);
        return $results;
      } catch (PDOException $ex) {
          echo $sql . '<br>' . $ex->getMessage();
      }
    }
    function GetById($id){
       $db = new DbConnect();
       $connect = $db->ConnectToDatabase();
       try{
        $sql = "SELECT * From article WHERE id='$id'";
        $stmt  = $connect->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
       // var_dump($results);
        return $results;
      } catch (PDOException $ex) {
          echo $sql . '<br>' . $ex->getMessage();
      }
    }
    function GetByCat($cat){
       $db = new DbConnect();
       $connect = $db->ConnectToDatabase();
       try{
        $sql = "SELECT * From article WHERE cat='$cat' LIMIT 3";
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
