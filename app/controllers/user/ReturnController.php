<?php

namespace Controller;

class ReturnController{
    public static function get($bookID){
        \Utils\utils::check(0);
        \Model\Books::returnBook($bookID);
        \Model\User::returnBook($_SESSION["Username"]);
        header('Location: /');
    }
}

?>