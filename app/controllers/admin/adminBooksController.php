<?php

namespace Controller;

class adminBooksController{
    public static function get(){
        echo \View\Loader::make()->render("templates/list.twig", array(
            "books" => \Model\Books::getBooks()
        ));
    }
}

?>