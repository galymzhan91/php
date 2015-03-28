<?php
include ('db.php');

?> 
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="UTF-8" />
</head>
<body>
	<table style="border:solid 1px">
		<tr> <td><h4>Login Page</h4></td> </tr>
		<tr> <td><input type="text" name="username" placeholder="username" required></td> </tr>
		<tr> <td><input type="text" name="password" placeholder="password" required></td> </tr>
		<tr> <td><input type="submit" name="button" value="ok">   <a href="register.php">register</a></td></tr>

	</table>
</body>
</html>
