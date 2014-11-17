<?php
    //connects config.php to create.php
    //changed database.php to config.php
    require_once(__DIR__ . "/../model/config.php");
    
    $connection = new mysqli($host, $username, $password);
    
    if($connection->connect_error) {
        die("Error: = " . $connection->connect_error);
    }
    
    $exists = $connection->select_db($database);
    
    if(!$exists) {
        $query = $connection->query("CREATE DATABASE $database");
        
        if($query) {
            echo "Succesfully created database: " . $database;
        }
    }
    else {
        echo "Database already exists.";
    }
    //BLOG TITLE
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11)NOT NULL AUTO_INCREMENT,"
            . "title varchar(225) NOT NULL,"
            . "posts text NOT NULL,"
            . "PRIMARY KEY (id))");
    
            $connection->close();