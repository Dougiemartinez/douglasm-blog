<?php
    //connects config.php to create.php
    //changed database.php to config.php
    require_once(__DIR__ . "/../model/config.php");
    //stores a query
    $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
            . "id int(11)NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            //creates post column
            . "posts text NOT NULL,"
            . "DateTime datetime NOT NULL ,"
            //sets key to id
            . "PRIMARY KEY (id))");
    //if ture
    
    if($query) {
        echo "<p>Successfully created table: posts</p>";
    }
    //if false
    else {
        
    }
    
    $query = $_SESSION["connection"]->query("CREATE TABLE users ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username varchar(30) NOT NULL,"
            . "email varchar(50) NOT NULL,"
            . "password char(128) NOT NULL,"
            . "salt char(128) NOT NULL,"
            . "PRIMARY KEY (id))");
    //checks to see if query is false
    if($query) {
        echo "<p>Successfuly created table: users</p>";
    }
    else {
        
    }
    
    
    