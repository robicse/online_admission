<?php
	$connect_error = 'Sorry, we\re expressing connecting problems';
	mysql_connect('localhost','root','') or die ($connect_error);
	mysql_select_db('form_login') or die ($connect_error);
?>