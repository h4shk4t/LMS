<?php

namespace Controller;

class adminDashboardController{
    public static function get(){
        echo \View\Loader::make()->render("templates/adminDashboard.twig");
    }
}

?>