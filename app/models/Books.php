<?php

namespace Model;

class Books{
    public static function getBooks(){
        $db = DB::get_instance();
        $statement = $db->prepare("SELECT NAME, AUTHOR, STATUS, BOOKID, TYPE FROM BOOKS");
        $statement->execute();
        $rows = $statement->fetchAll();
        return $rows;
    }
    public static function addBook($bname,$author,$type,$isbn){
    $db = DB::get_instance();
        $statement = $db->prepare("INSERT INTO BOOKS (NAME,AUTHOR,STATUS,TYPE,ISBN) VALUES (:bname,:author,:status,:type,:isbn)");
        $statement->execute(array(":bname"=>$bname,":author"=>$author,":status"=>"AVAILABLE",":type"=>$type,":isbn"=>$isbn));
        }
    public static function getBook($bookID){
        $db = DB::get_instance();
        $statement = $db->prepare("SELECT BOOKID,NAME, AUTHOR, STATUS, TYPE, ISBN FROM BOOKS WHERE BOOKID=(:bookID)");
        $statement->execute(array(":bookID"=>$bookID));
        $rows = $statement->fetchAll();
        return $rows;
    }
    public static function returnBook($bookID){
        $db = DB::get_instance();
        $statement = $db->prepare('UPDATE BOOKS SET STATUS="RETURN" WHERE BOOKID=(:bookID)');
        $statement->execute(array(":bookID"=>$bookID));
    }
    public static function requestBook($bookID){
        $db = DB::get_instance();
        $statement = $db->prepare('UPDATE BOOKS SET STATUS="WAITING" WHERE BOOKID=(:bookID)');
        $statement->execute(array(":bookID"=>$bookID));
    }
    public static function approve($bookID){
        $db = DB::get_instance();
        $statement = $db->prepare('UPDATE BOOKS SET STATUS="UNAVAILABLE" WHERE BOOKID=(:bookID)');
        $statement->execute(array(":bookID"=>$bookID));
    }
    public static function approveReturn($bookID){
        $db = DB::get_instance();
        $statement = $db->prepare('UPDATE BOOKS SET STATUS="AVAILABLE" WHERE BOOKID=(:bookID)');
        $statement->execute(array(":bookID"=>$bookID));
    }
}
