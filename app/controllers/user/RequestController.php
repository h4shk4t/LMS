<?php

namespace Controller;

class RequestController{
    public static function get($bookID){
        \Utils\utils::check(0);
        \Model\Books::requestBook($bookID);
        \Model\User::requestBook($_SESSION["Username"],$bookID);
        header('Location: /');
    }
}

?>