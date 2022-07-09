<?php

namespace Controller;

class BookController{
    public static function get(){
        echo \View\Loader::make()->render("templates/browse.twig", array(
            "book" => \Model\Books::getBook(),
            "user" => \Model\User::getUser()
        ));
    }
}

?>