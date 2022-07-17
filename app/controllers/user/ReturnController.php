<?php

namespace Controller;

class ReturnController extends \User\Auth{
    public static function get($bookID){
        //\Utils\utils::check("user");
        \Model\Books::returnBook($bookID);
        \Model\User::returnBook($_SESSION["username"]);
        header('Location: /');
    }
}

