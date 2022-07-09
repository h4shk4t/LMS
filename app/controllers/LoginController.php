<?php

namespace Controller;

class LoginController{
    
    public function get(){
        echo \View\Loader::make()->render("templates/login.twig");
    }

    public function post(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        \Model\User::login($username,$password);
        //\Model\Register::register($username,$name,$eno,$hash);
    }
}

?>