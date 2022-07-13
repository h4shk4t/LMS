<?php

namespace Utils;

class utils{
    public static function check($checkAdmin){
        session_start();
        if(isset($_SESSION["Username"])){
            if($checkAdmin == "admin"){
                if($_SESSION["isAdmin"] == 1){
                    echo "Authorised";
                }
                else{
                    echo "Unauthorised";
                    header("Location: /login");
                    die();
                }
            }
            else{
                $_SESSION["isAdmin"] = 0;
            }
        }
        else{
            header("Location: /login");
        }
    }
}