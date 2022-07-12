<?php

namespace Controller;

class BrowseController{
    public static function get(){
        \Utils\utils::check(0);
        if($_SESSION["isAdmin"]==1){
            header('Location: /dashboard');
        }
        else{
            echo \View\Loader::make()->render("templates/browse.twig", array(
                "books" => \Model\Books::getBooks(),
                //"user" => \Model\User::getUser()
            ));
        }
}
}

?>