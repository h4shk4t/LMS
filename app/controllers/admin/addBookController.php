<?php

namespace Controller;

class addBookController{
    public static function get(){
        \Utils\utils::check(1);
        echo \View\Loader::make()->render("templates/add.twig");
    }
    public static function post(){
        \Utils\utils::check(1);
        $bookName = $_POST["bookName"];
        $author = $_POST["author"];
        $type = $_POST["type"];
        $isbn = $_POST["isbn"];
        \Model\Books::addBook($bookName,$author,$type,$isbn);
    }
}