<?php

namespace Utils;

class utils{
    public static function check($checkAdmin){
        session_start();
        if($_SESSION["Username"]){
            if($checkAdmin == 1){
                if($_SESSION["isAdmin"] == 1){

                }
                else{
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