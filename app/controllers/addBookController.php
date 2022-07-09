<?php

namespace Controller;

class addBookController{
    public static function get(){
        echo \View\Loader::make()->render("templates/add.twig");
    }
    public static function post(){
        $bname = $_POST["bname"];
        $author = $_POST["author"];
        $type = $_POST["type"];
        $isbn = $_POST["isbn"];
        \Model\Books::addBook($bname,$author,$type,$isbn);
    }
}