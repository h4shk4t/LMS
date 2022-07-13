<?php

namespace Controller;

class ApproveController{
    public static function get($bookID){
        \Utils\utils::check("admin");
        \Model\Books::approve($bookID);
        header("Location: /list");
    }
}

