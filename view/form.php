<?php
//require config file tp the $path variable
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>
<!-- creates blog header-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title:</label>
        <!--allows one line of text-->
        <input type="text" name="title"/>
    </div>
    
    <div>
        <label for="post">Post: </label>
        <!-- allows multiple lines of text-->
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <!-- creates a button called submit-->
        <button type="Submit">Submit</button>
        
    </div>
    
</form>


