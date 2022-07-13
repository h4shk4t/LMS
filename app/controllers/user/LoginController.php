<?php

namespace Controller;

class LoginController{
    
    public function get(){
        echo \View\Loader::make()->render("templates/login.twig");
    }

    public function post(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $row = \Model\User::login($username,$password);
        if (password_verify($password,$row["HASH"])){
            session_start();
            $_SESSION["Username"] = $username;
            $_SESSION["isLoggedIn"] = 1;
            if($username == 'admin'){
                $_SESSION["isAdmin"] = 1;
            }
            else{
                $_SESSION["isAdmin"] = 0;
            }
            header('Location: /');
        }
        else{
            echo "Incorrect Password";
        }
    }
}

