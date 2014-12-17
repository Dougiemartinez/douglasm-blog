<?php
//query user
    require_once(__DIR__ . "/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
        //builds new query
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
            //checks to see if login password matches password in database
    if($query->num_rows == 1) {
        $row = $query->fetch_array();
        
        if($row["password"] === crypt ($password, $row["salt"])) {
            
            $_SESSION["authenticated"] = true;
            echo "<p>Login Successful!</p>";
         }
         else {
             echo "<p>Invalid username and password</p>";
         }
    }
    else {
        echo "<p>Invalid username and password</p>";
    }