<?php
/*
Template Name: SwingIN Home
*/
get_header(); ?>

		<div class="mainWrapper">
			
			<div ID="logoHeader">
				
					<img src="<?php echo get_template_directory_uri(); ?>/img/SwingINLogoBig.png" />
				
				<div class="logoText">
					<div>
						<h1>SwingIN 2014</h1>
					</div>
					<div>
						<h2>Vintage Swing Dance Workshop</h2> 
						<h2>Aug. 29th - Sept. 1st • Indianapolis, Indiana</h2>
					</div>
				</div>
			</div>
			
			
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // End the loop ?>
			
			
			<div ID="footer">
					<img src="<?php echo get_template_directory_uri(); ?>/img/SwingINLogoFooter.png" />
				<div class="logoText">
					<div>
						<h1>SwingIN • Naptown Stomp Lindy Hop Society</h1>
					</div>
					<div>
						<h2>All Rights Reserved • Copyright © 2014 • Privacy Policy </h2>
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>