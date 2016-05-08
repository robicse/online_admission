<?php 

	try{
		$pdo = new PDO('mysql:host=localhost;dbname=form_login', 'root', '');
	}catch(PDOException $e){
		exit('Database error.');
	}

?>