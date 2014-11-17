<?php
    require_once(__DIR__ . "/../model/config.php");
    //changed database.php to config.php
    //requires database file from the model folder
        
    $connection = new mysqli($host, $username, $password, $database);
    //establish connection to database by requiring username password 
    //this post means its recieving data called title and filter
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    //this post means its recieving data call post and filter
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    
    $query = $connection->query("INSERT INTO posts SET title = '$title', posts = '$post'");
    
    if($query) {
        echo "<p>Successfuly added post: $title</p>";
    }
    else {
        echo "<p>$connection->error</p>";
    }
    
    $connection->close();
//close connection to database