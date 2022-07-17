<?php

namespace Controller;

class addBookController extends \Admin\Auth{
    public static function get(){
        //\Utils\utils::check("admin");
        echo \View\Loader::make()->render("templates/add.twig");
    }
    public static function post(){
        //\Utils\utils::check("admin");
        $bookName = $_POST["bookName"];
        $author = $_POST["author"];
        $type = $_POST["type"];
        $isbn = $_POST["isbn"];
        \Model\Books::addBook($bookName,$author,$type,$isbn);
        echo "Book successfully added! Add a new book <a href='/add'>here</a>";
    }
}