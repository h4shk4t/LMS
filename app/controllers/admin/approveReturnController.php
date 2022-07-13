<?php

namespace Controller;

class approveReturnController{
    public static function get($bookID){
        \Utils\utils::check("admin");
        \Model\Books::approveReturn($bookID);
        header("Location: /list");
    }
}

