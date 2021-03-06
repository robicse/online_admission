<?php
	session_start();
	include_once('../includes/connection.php');

	if(isset($_SESSION['logged_in'])){
		if(isset($_POST['title'], $_POST['content'])){
			$title = $_POST['title'];
			$content = nl2br($_POST['content']);

			if(empty($title) or empty($content)){
				$error = 'All fields are required !';
			}else{
				$query = $pdo->prepare('INSERT INTO mainmenu(menu_title, menu_content, menu_timestamp) VALUES(?, ?, ?)');
				
				$query->bindValue(1, $title);
				$query->bindValue(2, $content);
				$query->bindValue(3, time());

				$query->execute();

				header('Location:index.php');

			}
		}
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
					<h2>Add the Menu</h2>
					<h3>Create a ADD text in admin panel</h3>
					<?php if(isset($error)) { ?>
						<small style="color:#cf0000;">
							<?php echo $error; ?>
						</small>
						<br><br>
					<?php } ?> 

					<form action="nav_menu.php" method="post" autocomplate="off">
						<input type="text" name="title" placeholder="Menu"> <br><br>
						<textarea name="content" id="" cols="40" rows="7" placeholder="Content"></textarea><br><br>
						<input type="submit" value="Add Menu">
					</form>
				</div>
<?php include ("includes/layouts/footer.php") ?>

	<?php
	}else{
		header('Location: index.php');
	}
?>