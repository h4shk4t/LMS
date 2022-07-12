<?php

namespace Controller;

class approveReturnController{
    public static function get($bookID){
        \Utils\utils::check(1);
        \Model\Books::approveReturn($bookID);
        header("Location: /list");
    }
}

?>