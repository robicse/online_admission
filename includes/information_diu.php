<div class="information_diu">
		<ul>
			<?php foreach ($abouts as $about) { ?>
			<li>
				<h1><?php echo $about['about_title']; ?></h1> <br>
				<?php echo $about['about_content']; ?>
			</li>
			<?php } ?>
		</ul>
	<div class="gallery_content">
		<a class="fancybox" href="img/CM1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/CM1.jpg" alt="" /></a>
		<a class="fancybox" href="img/slide1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/slide1.jpg" alt="" /></a>
		<a class="fancybox" href="img/101.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/101.jpg" alt="" /></a>
		<a class="fancybox" href="img/1254.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/1254.jpg" alt="" /></a>
		<a class="fancybox" href="img/slide2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/slide2.jpg" alt="" /></a>
	</div>
</div>