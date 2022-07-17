<?php

namespace User;

use Toro;
use ToroHook;
class Auth{
    function __construct(){
        ToroHook::add("beforeHandler", function(){
            session_start();
            if(!isset($_SESSION["username"])){
                header("Location: /login");
            }
        });
    }
}