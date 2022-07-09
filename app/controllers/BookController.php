<?php

namespace Controller;

class BookController{
    public static function get(){
        echo \View\Loader::make()->render("templates/browse.twig", array(
            "books" => \Model\Books::getBooks()
        ));
    }
}

?>