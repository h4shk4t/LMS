<?php

namespace Admin;

use Toro;
use ToroHook;

class Auth{
    function __construct(){
        ToroHook::add("before_handler", function(){
            session_start();
            if(isset($_SESSION["username"])){
                if($_SESSION["isAdmin"] != 1){
                    echo "Unauthorised";
                    header("Location: /login");
                    die();                
                }
            }
            else{
                header("Location: /login");
            }
        });
    }
}