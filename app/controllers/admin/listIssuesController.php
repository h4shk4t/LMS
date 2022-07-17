<?php

namespace Controller;

class listIssuesController extends \Admin\Auth{
    public static function get(){
       // \Utils\utils::check("admin");
        echo \View\Loader::make()->render("templates/listIssues.twig", array(
            "users" => \Model\User::getUsersBID(),
        ));
    }
}

