<?php
    require_once(__DIR__ . "/../model/database.php");
    //requires database file from the model folder
        
    $connection = new mysqli($host, $username, $password, $database);
    //establish connection to database by requiring username password 
    //this post means its recieving data called title and filter
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    //this post means its recieving data call post and filter
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    
    echo  "<p>Title: $title</p>";
    echo  "<p>Post: $post</p>";

    $connection->close();
//close connection to database