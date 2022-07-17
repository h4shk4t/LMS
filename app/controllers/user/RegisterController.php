<?php

namespace Controller;

class RegisterController{
    
    public function get(){
        echo \View\Loader::make()->render("templates/register.twig");
    }

    public function post(){
        $username = $_POST["username"];
        $name = $_POST["name"];
        $enrollmentNumber = $_POST["enrollmentNumber"];
        if ($_POST["password"] != $_POST["confirmPassword"]){
            echo "Passwords do not match";
            die();
        }
        $password = $_POST["password"];
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT, array('cost' => 10));
        \Model\User::register($username,$name,$enrollmentNumber,$hash);
        echo "Succesfully registered! Redirecting in 3 seconds...";
        sleep(3);
        $row = \Model\User::login($username,$password);
        if (password_verify($password,$row["HASH"])){
            session_start();
            $_SESSION["username"] = $username;
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

