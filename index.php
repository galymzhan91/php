<?php
include ('db.php');
if(isset($_POST['button'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = 'SELECT * from users WHERE username='.$username.' AND password='.$password;
	$login = mysql_query($query);
	
}
?> 
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="UTF-8" />
	<title>Login page</title>
</head>
<body>
<form method="post" action="index.php" name="login_form">
	<table style="border:solid 1px">
		<tr> <td><h4>Login Page</h4></td> </tr>
		<tr> <td><input type="text" name="username" placeholder="username" required></td> </tr>
		<tr> <td><input type="text" name="password" placeholder="password" required></td> </tr>
		<tr> <td><input type="submit" name="button" value="ok">   <a href="register.php">register</a></td></tr>

	</table>
</form>
</body>
</html>
