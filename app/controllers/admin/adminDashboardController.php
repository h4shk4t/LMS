<?php

namespace Controller;

class adminDashboardController{
    public static function get(){
        \Utils\utils::check("admin");
        echo \View\Loader::make()->render("templates/adminDashboard.twig");
    }
}
