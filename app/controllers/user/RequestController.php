<?php

namespace Controller;

class RequestController extends \User\Auth{
    public static function get($bookID){
        //\Utils\utils::check("user");
        \Model\Books::requestBook($bookID);
        \Model\User::requestBook($_SESSION["username"],$bookID);
        header('Location: /');
    }
}
