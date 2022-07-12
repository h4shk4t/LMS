<?php

namespace Controller;

class RegisterController{
    
    public function get(){
        echo \View\Loader::make()->render("templates/register.twig");
    }

    public function post(){
        $username = $_POST["username"];
        $name = $_POST["name"];
        $eno = $_POST["eno"];
        if ($_POST["password"] != $_POST["confirmPassword"]){
            echo "Passwords do not match";
            die();
        }
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT, array('cost' => 10));
        \Model\User::register($username,$name,$eno,$hash);
    }
}

