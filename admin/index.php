<?php
	session_start();
	include_once('../includes/connection.php');

	if(isset($_SESSION['logged_in'])){
		?>
		
<?php include ("includes/layouts/header.php") ?>
	<div id="main">
		<div id="navigation">
			<h2>Category</h2>
				<ol>
					<li><a href="nav_menu.php">Main Menu</a></li>
					<li><a href="add.php">Add Article</a></li>
					<li><a href="delete.php">Delete Article</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="delete_about.php">Delete About</a></li>
					<li><a href="gallery.php">Gallery</a></li>
				</ol>
		</div>
		<div id="page">
			<h2>Admin Panel</h2>
			<h3>Welcome to our site</h3>
		</div>
		<div class="extra_view">
			<!-- You can write something code-->			
		</div>
<?php include ("includes/layouts/footer.php") ?>
<?php

	}else{
		if(isset($_POST['username'], $_POST['password'])){
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			if(empty($username) or empty($password)){
				$error = 'All filed are requered!';
			}else{ 
				$query = $pdo->prepare("SELECT * FROM admin WHERE user_name = ? AND user_password = ?");
				$query->bindValue(1, $username);
				$query->bindValue(2, $password);

				$query->execute();

				$num = $query->rowCount();

				if($num == 1){
					//user entered correct details.
					$_SESSION['logged_in'] = true;
					header('Location: index.php');
					exit();
				}else{
					//user enter false details.
					$error = 'Incorrect details';
				}
			}
		}
		?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>CMS Tutorial</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	</head>
<body>
	<div class="container">
		<h3>Admin Panel of</h3>
		<a href="index.php">Dhaka International University</a> <br><br>
		<?php if(isset($error)) { ?>
			<small style="color:#cf0000;">
				<?php echo $error; ?>
			</small>
			<br><br>
		<?php } ?> 

		<form action="index.php" method="post" autocomplate="off">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>

<?php
	}
?>