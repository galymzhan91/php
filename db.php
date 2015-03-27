<?php
$link = mysql_connect('localhost','root','');
if(!$link){
	echo 'Error connect to host'.mysql_error;
}
$connection = mysql_select_db('test', $link);
if(!$connection){
	echo 'Error to find db'.mysql_errno;
}
?>
