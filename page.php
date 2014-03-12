<?php
/*
Template Name: SwingIN Content 1
*/
get_header(); ?>


		<div class="mainWrapper">
			
			<div ID="logoSubHeader">
				
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
			
			<div ID="pageHeader">	
				<h1><?php the_title(); ?></h1>
			</div>
	
	<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // End the loop ?>
			
			<?php get_footer(); ?>
			
			