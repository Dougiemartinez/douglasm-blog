<?php
    require_once(__DIR__ . "/Database.php");
    //preserves information to create only 1
    session_start();
    $path = "/douglasm-blog/";
    //cut this code from database.php
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
    //checks if variable called session and exists
    if(!isset($_SESSION["connection"])) {
        //creates new objects stored in connection
    $connection = new Database($host, $username, $password, $database);
    //connection that gives us the username, host, password, database
    $_SESSION["connection"] = $connection;
    }