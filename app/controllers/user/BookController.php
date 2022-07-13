<?php

namespace Controller;

class BookController{
    public static function get($bookID){
        \Utils\utils::check("user");
        echo \View\Loader::make()->render("templates/book.twig", array(
            "books" => \Model\Books::getBook($bookID),
            "user" => \Model\User::getCurrentUser()
        ));
    }
}

