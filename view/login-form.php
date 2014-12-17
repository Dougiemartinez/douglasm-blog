<html>
<head>
<title>
Login to Continue
</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	<form action="check_login.php" method="post">
		<table class="login_table">
		<tr>
		<td>Username:</td>
		<td><input type="text" name="username" id="username"></td>
		</tr>
		<tr>
		<td>Password:</td>
		<td><input type="text" name="password" id="password"></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="keep" value="true"> <small>Keep Me</small></td>
		<td><input type="submit" value="Login"></td>
		</tr>
		</table>
	</form>
</body>
</html>
<?php
//require config file tp the $path variable
    require_once(__DIR__ . "/../model/config.php")
 ?>
    <h1>Login</h1>
    
    <from method="post" action="<?php echo $path . "controller/login-user.php"?>">
        <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input type="pawword" name="password" />
    </div>   
    
    <div>
        <button type="submit">Submit</but
    </from>
            

