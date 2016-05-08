<?php
	session_start();
	include_once('../includes/connection.php');
	include_once('../includes/Article.php');

	$article = new Article;

	if(isset($_SESSION['logged_in'])){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = $pdo->prepare('DELETE FROM articles WHERE articles_id = ?');
			$query->bindValue(1, $id);
			$query->execute();

			header('Location: delete.php');
		}

		$articles = $article->fetch_all();
	?>
<?php include ("includes/layouts/header.php") ?>
	<div id="main">
		<div id="navigation">
			<h2>Category</h2>
				<ol>
					<li><a href="add.php">Add Article</a></li>
					<li><a href="delete.php">Delete Article</a></li>

					<li><a href="about.php">About</a></li>
					<li><a href="delete_about.php">Delete About</a></li>

					<li><a href="gallery.php">Gallery</a></li>

					<li><a href="logout.php">Logout</a></li>
				</ol>
		</div>	 
			<div id="page">
				<h2>Delete Panel</h2>
				<h3>If you want to delete your text please select the post.</h3>
				<?php if(isset($error)) { ?>
					<small style="color:#cf0000;">
						<?php echo $error; ?>
					</small>
					<br><br>
				<?php } ?> 

				<form action="delete.php" method="get">
				 	<select onchange="this.form.submit();" name="id">
				 		<?php foreach($articles as $article) { ?>
							<option value="<?php echo $article['articles_id']; ?><?php echo $article['articles_tile']; ?>">
								<?php echo $article['articles_title']; ?>
							</option>
				 		<?php } ?>
				 	</select>
				</form>
			</div>
<?php include ("includes/layouts/footer.php") ?>			 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
	<?php
	}else{
		header('Location: index.php');
	}
?>