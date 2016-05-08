<?php 
	include 'core/init.php';
	include 'includes/overall/header.php'; 

	include_once('includes/connection.php');
	include_once('includes/article.php');
	
	$article = new Article;
	$articles = $article->fetch_all();
?>			
<?php include 'includes/slider.php'; ?>

<?php include 'includes/about_diu.php'; ?>

<?php include 'includes/overall/footer.php'; ?>