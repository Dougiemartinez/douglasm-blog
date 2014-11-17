<?php
//setting the class to private makes this viewable only in thid file
class Database {
     private $connection;
     private $host;
     private $username;
     private $password;
     private $database;
     //passing the constructed infromation
     public function __construct($host, $username, $password, $database ) {
         $this->host = $host;
         $this->username = $username;
         $this->password = $username;
         $this->database = $database;
         //created functions
         //the function__construct allows you to pass any parameters on object construction
     }
     
     public function openConnecction () {
         
     }
     
     public function closeConnection () {
         
     }
     
     public function query($string) {
         
     }
}
//we made private classes so that we can make it viewable in this file and they cant be modified
//makes it easier to read 
//easier to maintain
//cuts down lines of code
//also reusable
//the new object will access the same instance as the object that was assigned
//you write in functions intead of variables because you can use a function over and over again but a variable needs
//to be writen every time