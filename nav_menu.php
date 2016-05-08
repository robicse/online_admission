<?php
	include_once('includes/connection.php');
	include_once('includes/article.php');

	$article = new Article;

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$data = $article->fetch_data($id);		
	?>	

	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>CMS Tutorial</title>
		<link rel="stylesheet" type="text/css" href="css/admin.css" media="all" />
	</head>
	<body>
		<div class="container">
			<a href="index.php">Dhaka International University</a>
			
			<h4>
				<?php echo $data['menu_title']; ?>
			</h4>
				<p><?php echo $data['menu_content'] ?></p>
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