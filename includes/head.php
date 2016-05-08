<head>
	<meta charset="UTF-8">
	<title>Dhaka International University</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	
	<!--tab slider-->
	<link rel="stylesheet" href="css/tab_slider.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="js/organictabs.jquery.js"></script>
	
	<!--slider css file-->
	<meta name="title" content="jQuery Immersive Slider by Pete R. | The Pete Design" />
	<meta name="description" content="Create an immersive slider experience with jQuery Immersive Slider" />
	<link rel="image_src" href="/images/immersive_slider_image.png" />

	<meta content="http://www.thepetedesign.com/demos/immersive_slider_demo.html" property="og:url" />
	<meta content="http://www.thepetedesign.com/images/immersive_slider_image.png" property="og:image" />
	<link rel="shortcut icon" id="favicon" href="favicon.png"> 
	<meta name="author" content="Pete R.">
	<link rel="canonical" href="http://www.thepetedesign.com/demos/immersive_slider_demo.html" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.immersive-slider.js"></script>
	<link href='css/immersive-slider.css' rel='stylesheet' type='text/css'>

	<!-- Add fancyBox main JS and CSS files -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	
	
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
	
	<!--fancy box-->
	
	<!--google map code-->
	<script
		src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
	</script>

	<script>
		function initialize()
		{
		var mapProp = {
		  center:new google.maps.LatLng(23.709921000000000000, 90.407143000000020000),
			zoom:12,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	

	<script>
		$(function() {
		
			// Calling the plugin
			$("#example-one").organicTabs();
			$("#example-two").organicTabs({
				"speed": 100,
				"param": "tab"
			});
			
		});
	</script>
	
	<!--slider jquery-->
	  <script>
		var _gaq=[['_setAccount','UA-11278966-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	  </script>
	  
	  
	  <!--light box jquery-->
		<script>
			$(document).on('ready', function(){
				$modal = $('.modal-frame');
				$overlay = $('.modal-overlay');

				/* ooo look at meeee I know how to use animateend to watch for events meh meh meh... Anyway, need this to clear out the keyframe classes so they dont clash with each other between ener/leave. Cheers. */
				$modal.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){
				  if($modal.hasClass('state-leave')) {
					$modal.removeClass('state-leave');
				  }
				});

				$('.close').on('click', function(){
				  $overlay.removeClass('state-show');
				  $modal.removeClass('state-appear').addClass('state-leave');
				});

				$('.open').on('click', function(){
				  $overlay.addClass('state-show');
				  $modal.removeClass('state-leave').addClass('state-appear');
				});

			  });
		</script>	
</head>