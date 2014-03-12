<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title>SwingIN 2014 | <?php the_title(); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/SwingIN-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/SwingIN-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/SwingIN-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<!--  <meta name="apple-mobile-web-app-capable" content="yes" /> -->
	<!--  <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" /> -->

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/SwingIN-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/SwingIN-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/SwingIN-load.png" media="screen and (max-device-width: 320px)" />

<!-- My CSS Switcher -->

	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/flex.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/thirty-eight.css" rel="stylesheet" type="text/css"> 
	<link href="<?php echo get_template_directory_uri(); ?>/thirty-eight-nav.css" rel="stylesheet" type="text/css"> 	
	
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kreon' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kreon:300' rel='stylesheet' type='text/css'>

</head>


<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>


<body>
		<div class="navWrapper">
			<nav id="mobileNav">
				<div class="logo"><a href="/">SwingIN 2014</a></div>
				<div class="menu">
					<a href="#" class="menuIcon" onclick="toggle_visibility('mainNav');">
						<img src="<?php echo get_template_directory_uri(); ?>/img/menuIcon.gif" width="40px" height="40px">
					</a>
				</div>
			</nav>
			<nav id="mainNav">
				<ul>
					<li class="_current"><a href="/">Home</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Sponsors</a></li>
					<li><a href="our-team">Our Team</a></li>
					<li><a href="Contact">Contact</a></li>
				</ul>
			</nav>
		</div>