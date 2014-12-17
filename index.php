
<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    
    require_once(__DIR__. "/view/header.php");
    
    if(authenticateUser()) {
        require_once(__DIR__ . "/view/navigation.php");
    }
    require_once(__DIR__. "/view/navigation.php");

    require_once(__DIR__. "/controller/create-db.php");

    require_once(__DIR__. "/view/footer.php");
            
    require_once(__DIR__. "/controller/read-post.php")       
?>

<!--insert header code in PHP file -->,
<!--links our create-db file to our index --!>
<!--insert footer code in PHP file --!>
<!--links navigation on the blog--!>