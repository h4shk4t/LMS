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
    "/book/request/:number" => "\Controller\RequestController",
    "/book/return/:number" => "\Controller\ReturnController",
    "/add" => "\Controller\addBookController",
    "/list" => "\Controller\adminBooksController",
    "/dashboard" => "\Controller\adminDashboardController",
    "/listIssues" => "\Controller\listIssuesController",
));

?>