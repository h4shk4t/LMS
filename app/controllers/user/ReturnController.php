<?php

namespace Controller;

class ReturnController{
    public static function get($bookID){
        session_start();
        \Model\Book::returnBook($bookID);
        \Model\User::returnBook($_SESSION["Username"]);
        header('Location: /');
    }
}

?>