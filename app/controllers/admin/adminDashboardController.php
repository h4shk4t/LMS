<?php

namespace Controller;

class adminDashboardController{
    public static function get(){
        \Utils\utils::check(1);
        echo \View\Loader::make()->render("templates/adminDashboard.twig");
    }
}

?>