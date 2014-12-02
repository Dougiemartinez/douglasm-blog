<?php

//setting the class to private makes this viewable only in thid file
class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    public $error;
//passing the constructed infromation
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $username;
        $this->database = $database;

        $this->connection = new mysqli($host, $username, $password);

        if ($this->connection->connect_error) {
            die("Error: = " . $this->connection->connect_error);
        }

        $exists = $this->connection->select_db($database);

        if (!$exists) {
            $query = $connection->query("CREATE DATABASE $database");

            if ($query) {
                echo "Succesfully created database: " . $database;
            }
        } else {
            echo "Database already exists.";
        }
//created functions
//the function__construct allows you to pass any parameters on object construction
    }

    public function openConnecction() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        //connection is called above so we remove the $ because it is called by the $this variable
        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

//the isset lets you check if there is information present in the variable
    public function closeConnection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->openConnecction();

        $query = $this->connection->query($string);
        
        if(!$query) {
            $this->error = $this->connection->error;
        }

        $this->closeConnection();

        return $query;
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