<?php 

require __DIR__ ."/../vendor/autoload.php";

ToroHook::add("404", function () {
    echo "404 - Not found!";
})

Toro::serve(array(
    "/register" => "RegisterController",
    "/login" => "LoginController"
));

?>