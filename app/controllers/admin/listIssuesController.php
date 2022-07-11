<?php

namespace Controller;

class listIssuesController{
    public static function get(){
        session_start();
        if ($_SESSION["isLoggedIn"]==1 && $_SESSION["isAdmin"]==1){
            echo \View\Loader::make()->render("templates/listIssues.twig", array(
                "user" => \Model\User::getUsersBID(),
            ));
        }
        else{
            header('Location: /');
        }
    }
}

?>