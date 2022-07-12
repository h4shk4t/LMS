<?php

namespace Controller;

class ApproveController{
    public static function get($bookID){
        \Utils\utils::check(1);
        \Model\Books::approve($bookID);
        header("Location: /list");
    }
}

