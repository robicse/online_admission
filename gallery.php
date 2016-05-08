<!DOCTYPE HTML>
<html lang="en-US">
<?php include 'includes/head.php'; ?>
<body>	
<?php include 'includes/header.php'; ?>
<?php
	require 'gallery/Gallery.php';

	$gallery = new Gallery();
	$gallery->setPath('gallery/images');

	$images = $gallery->getImages(array('jpg'));
?>

<div id="container">	
	<h1>Photo Gallery</h1>
	
		<div class="container">
			<?php if($images): ?>
			<div class="gallery cf">
				<?php foreach($images as $image): ?>
					<div class="gallery-item">
						<a class="fancybox" href="<?php echo $image[full]; ?>" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno">
							<img src="<?php echo $image['ths']; ?>" alt="">
						</a>
					</div>
				<?php endforeach; ?>
			</div>
			<?php else: ?>
				There is no Images.
			<?php endif; ?>
		</div>
</div>
<?php include 'includes/overall/footer.php'; ?>