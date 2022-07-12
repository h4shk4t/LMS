<?php

namespace Controller;

class BookController{
    public static function get($bookID){
        session_start();
        //var_dump(\Model\User::getCurrentUser());
        //die();
        if ($_SESSION["isLoggedIn"] == 1){
            echo \View\Loader::make()->render("templates/book.twig", array(
                "books" => \Model\Books::getBook($bookID),
                "user" => \Model\User::getCurrentUser()
            ));
        }
        else{
            header('Location: /login');
        }
    }
}

