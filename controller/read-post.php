<?php

require_once(__DIR__ . "/../model/config.php");
// retrieves post from database
$query = "SELECT * FROM posts ORDER BY id DESC";
$result = $_SESSION["connection"]->query($query);

if($result){
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='post'>";
        echo "<h2>" . $row ['title'] . "</h2>";
        echo "<br />";
        echo "<p>" . $row ['posts'] . "</h1>";
        echo "<br/>";
        echo "</div";
       
    }
}
