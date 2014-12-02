<?php
    require_once(__DIR__ . "/database.php");
    session_start();
    $path = "/douglasm-blog/";
    //cut this code from database.php
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
    if(!isset($_SESSION["connection"])) {
    $connection = new Database($host, $username, $password, $database);
    //connection that gives us the username, host, password, database
    $_SESSION["connection"] = $connection;
    }