<?php
	include_once('includes/connection.php');
	include_once('includes/about.php');

	$about = new About;

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$data = $about->fetch_data($id);		
	?>	

	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>CMS Tutorial</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	</head>
	<body>
		<div class="container">
		<h3>Admin Panel of</h3>
			<a href="index.php">Dhaka International University</a>
			
			<h4><?php echo $data['about_title']; ?></h4>
			<p><?php echo $data['about_content'] ?></p>
			
			<a href="index.php">&larr; Back</a>
		</div>
	</body>
	</html>


	<?php

	}else{
		header('Location: index.php');
		exit();
	}
?>