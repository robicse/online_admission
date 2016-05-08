<!DOCTYPE HTML>
<html lang="en-US">
<?php 
	include 'includes/head.php'; 
	include_once('includes/connection.php');
	include_once('includes/about.php');
	
	$about = new About;
	$abouts = $about->fetch_all();
?>
<body>	
<?php include 'includes/header.php'; ?>
<div id="container">
<?php include 'includes/information_diu.php'; ?>		
<?php include 'includes/overall/footer.php'; ?>