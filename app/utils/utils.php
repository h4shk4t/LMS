<?php

//Not used anymore. Kept for reference in case needed to revert back to using the following methods
namespace Utils;

class utils{
    public static function check($checkAdmin){
        session_start();
        if(isset($_SESSION["username"])){
            if($checkAdmin == "admin"){
                if($_SESSION["isAdmin"] != 1){
                    echo "Unauthorised";
                    header("Location: /login");
                    die();                
                }
            }
        }
        else{
            header("Location: /login");
        }
    }
}