<?php

namespace Model;

class Books{
    public static function getBooks(){
        $db = DB::get_instance();
        $stmnt = $db->prepare("SELECT NAME, AUTHOR, STATUS, BOOKID, TYPE FROM BOOKS");
        $stmnt->execute();
        $rows = $stmnt->fetchAll();
        return $rows;
    }
    public static function addBook($bname,$author,$type,$isbn){
        $db = DB::get_instance();
        $stmnt = $db->prepare("INSERT INTO BOOKS (NAME,AUTHOR,STATUS,TYPE,ISBN) VALUES (:bname,:author,:status,:type,:isbn)");
        $stmnt->execute(array(":bname"=>$bname,":author"=>$author,":status"=>"AVAILABLE",":type"=>$type,":isbn"=>$isbn));
        echo "Book successfully added! Add a new book <a href='/add'>here</a>";
    }
    public static function getBook($bookID){
        $db = DB::get_instance();
    }
}

?>