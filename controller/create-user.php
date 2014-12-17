<?php
    require_once(__DIR__ . "/../model/config.php");
    //filters email
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    //filter username
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    //filter password so it cant be stolen
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
 //makes our password unique  
 $salt = "$5$5" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
 
 $hashedPassword = crypt($password, $salt);
 //query database
 $query = $_SESSION["connection"]->query("INSERT INTO users SET "
         //sets certain infromation
         . "email = '$email',"
         . "username = '$username',"
         . "password = '$hashedPassword',"
         . "salt = '$salt'");
 //checks if query is succesful
 if($query) {
     echo "successfuly created user: $username";
 }
 else {
     echo "<p>" . $_SESSION["connection"]->error . "</p>";
 }