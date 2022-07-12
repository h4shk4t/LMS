<?php

namespace Controller;

class listIssuesController{
    public static function get(){
        \Utils\utils::check(1);
        echo \View\Loader::make()->render("templates/listIssues.twig", array(
            "users" => \Model\User::getUsersBID(),
        ));
    }
}

