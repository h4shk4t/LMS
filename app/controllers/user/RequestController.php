<?php

namespace Controller;

class RequestController{
    public static function get($bookID){
        session_start();
        \Model\Books::requestBook($bookID);
        \Model\User::requestBook($_SESSION["Username"],$bookID);
        header('Location: /');
    }
}

?>