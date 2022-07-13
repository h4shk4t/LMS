<?php

namespace Controller;

class ReturnController{
    public static function get($bookID){
        \Utils\utils::check("user");
        \Model\Books::returnBook($bookID);
        \Model\User::returnBook($_SESSION["Username"]);
        header('Location: /');
    }
}

