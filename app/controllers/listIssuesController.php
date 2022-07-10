<?php

class listIssuesController{
    public static function get(){
        echo \View\Loader::make()->render("templates/listIssues.twig", array(
            "user" => \Model\User::getUsersBID();
        ));
    }
}

?>