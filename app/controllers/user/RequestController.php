<?php

namespace Controller;

class RequestController{
    public static function get($bookID){
        \Utils\utils::check("user");
        \Model\Books::requestBook($bookID);
        \Model\User::requestBook($_SESSION["username"],$bookID);
        header('Location: /');
    }
}
