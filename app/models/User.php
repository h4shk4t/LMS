<?php

namespace Model;

class User{
    public static function register($username, $name, $eno, $hash){
        $db = DB::get_instance();
        $statement = $db->prepare("INSERT INTO USERS (USERNAME, NAME, ENO, HASH, ADMIN) VALUES (:username,:name,:eno,:hash,:admin)");
        //Data to be inserted
        $statement->execute(array(":username" => $username,":name" => $name,":eno" => $eno,":hash" => $hash,":admin" => 0));
    }
    public static function login($username,$hash){
        $db = DB::get_instance();
        $statement = $db->prepare("SELECT USERNAME,HASH FROM USERS WHERE USERNAME = (:username)");
        $statement->execute(array(":username"=>$username));
        $row = $statement->fetch();
        return $row;
    }
    public static function getUsersBID(){
        $db = DB::get_instance();
        $statement = $db->prepare("SELECT * FROM USERS WHERE BOOKID is not NULL");
        $statement->execute();
        $rows = $statement->fetchAll();
        return $rows;
    }
    public static function getCurrentUser(){
        session_start();
        $db = DB::get_instance();
        $statement = $db->prepare("SELECT * FROM USERS WHERE USERNAME = (:username)");
        $statement->execute(array(":username"=>$_SESSION["Username"]));
        $rows = $statement->fetch();
        return $rows;
    }
    public static function returnBook($userID){
        $db = DB::get_instance();
        $statement = $db->prepare("UPDATE USERS SET BOOKID = NULL WHERE USERNAME= (:userID);");
        $statement->execute(array(":userID"=>$userID));
    }
    public static function requestBook($userID,$bookID){
        $db = DB::get_instance();
        $statement = $db->prepare("UPDATE USERS SET BOOKID = (:bookID) WHERE USERNAME = (:userID)");
        $statement->execute(array(":userID"=>$userID,":bookID"=>$bookID));
    }
}

