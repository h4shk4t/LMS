<?php

namespace Controller;

class adminBooksController{
    public static function get(){
        \Utils\utils::check(1);
        echo \View\Loader::make()->render("templates/list.twig", array(
            "books" => \Model\Books::getBooks()
        ));
    }
}
