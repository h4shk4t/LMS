<?php

namespace Controller;

class approveReturnController extends \Admin\Auth{
    public static function get($bookID){
        //\Utils\utils::check("admin");
        \Model\Books::approveReturn($bookID);
        header("Location: /list");
    }
}

