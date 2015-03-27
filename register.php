<?php
	include('db.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fullname = $_POST['name'];
	$date = $_POST['birth'];
	$insert = mysql_query('INSERT INTO users(id,username,password,name,birth,group_id) 
							values(null, )');
?>
<html>
<head>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table style="border:solid 1px">
		<tr><td><h4>Register Page</h4></td></tr>
		<tr><td>Username: </td> <td><input type="text" name="username" placeholder="username"></td></tr>
		<tr><td>Password: </td> <td><input type="text" name="password" placeholder="password"></td></tr>
		<tr><td>FullName: </td> <td><input type="text" name="name" placeholder="name"></td></tr>
		<tr><td>Birthday: </td> <td><input type="date" name="birth"></td></tr>
		<tr><td><input type="submit" name="submit" value="submit"></td></tr>
	</table>
	</form>
</body>
</html>
