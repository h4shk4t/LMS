<?php 

require __DIR__ ."/../vendor/autoload.php";

ToroHook::add("404", function () {
    echo "404 - Not found!";
});

Toro::serve(array(
    "/register" => "\Controller\RegisterController",
    "/login" => "\Controller\LoginController",
    "/" => "\Controller\BrowseController",
    "/book/:number" => "\Controller\BookController",
    "/book/:number/:number" => "\Controller\BookController",
    "/book/:number/:number/return" => "\Controller\BookController",
    "/add" => "\Controller\addBookController",
    "/books" => "\Controller\adminBooksController",
    "/dashboard" => "\Controller\adminDashboardController"
));

?>