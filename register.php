<?php
	include('db.php');
	
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['birth'])){
		if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['birth'])){
			$username = mysql_real_escape_string($_POST['username']);
			$password = mysql_real_escape_string($_POST['password']);
			$fullname = mysql_real_escape_string($_POST['name']);
			$date = mysql_real_escape_string($_POST['birth']);
			
			$query = 'INSERT INTO xusers(id,username,password,fullname,birth) 
							values(null, "'.$username.'", "'.$password.'", "'.$fullname.'", "'.$date.'")';
			$result = mysql_query($query) or die('Wrong query: '.mysql_error());
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
	}
	
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="UTF-8" />
</head>
<body>
	<form method="POST" action="register.php">
	<table style="border:solid 1px">
		<tr><td><h4>Register Page</h4></td> <td></td> </tr>
		<tr><td>Username: </td> <td><input type="text" name="username" placeholder="username" required></td></tr>
		<tr><td>Password: </td> <td><input type="text" name="password" placeholder="password" required></td></tr>
		<tr><td>FullName: </td> <td><input type="text" name="name" placeholder="name"></td></tr>
		<tr><td>Birthday: </td> <td><input type="date" name="birth"></td></tr>
		<tr><td><input type="submit" name="submit" value="submit"></td><td><a href="index.php">login page</a></td></tr>
	</table>
	</form>
</body>
</html>

