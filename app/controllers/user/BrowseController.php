<?php

namespace Controller;

class BrowseController{
    public static function get(){
        session_start();
        if ($_SESSION['isLoggedIn']==1){
            echo \View\Loader::make()->render("templates/browse.twig", array(
                "books" => \Model\Books::getBooks(),
                //"user" => \Model\User::getUser()
            ));
        }
        else{
            header('Location: /login');
        }
    }
}

?>