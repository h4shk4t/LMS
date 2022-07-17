<?php

namespace Controller;

class SignoutController{
    public static function get(){
        session_destroy();
        header('Location: /login');
    }
}