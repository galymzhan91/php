<?php
$link = mysql_connect('127.0.0.1','root','') or die(mysql_error());
$connection = mysql_select_db('test', $link) or die(mysql_error());
?>
