<html>
<head>
<title></title>
 <link rel="stylesheet" media="screen and (min-width: 0px)" type="text/css" href="CSS/ipad.css">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content='width=768'>

<style type="text/css"></style>
</head>
<body>


<?php
    require_once(__DIR__ . "/../model/config.php");
    //changed database.php to config.php
    //requires database file from the model folder
   
    //establish connection to database by requiring username password 
    //this post means its recieving data called title and filter
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    //this post means its recieving data call post and filter
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //creates time
    $date = new DateTime("today");
    //sets timezone
    $time = new DateTime("America/Los_Angeles");
    //running a query on database. Inserting query to table "post" and sets value "post"
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', posts = '$post'");
    //changed all $connection to session
    //true or false query
    if($query) {
        echo "<p>Successfuly inserted post: $title</p>";
        //creates date and time
        echo "Posted on: " . $date->format("m/d/y") . " at " . $time->format("g:i");
    }
    else {
        
    }
    ?>
    <footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>

</footer>
	</body>
	</html>

   
//close connection to database