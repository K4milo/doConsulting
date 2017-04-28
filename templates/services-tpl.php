<?php
  /*
    Template Name: Services
  */
	get_template_part('includes/header'); ?>
	
	<div class="main-services">
		<?php while(have_posts()): the_post(); ?>
		<div class="container">
			<header class="def-header">
				<h2><?php the_title(); ?></h2>
			</header>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
	
	<div class="list-services">
		<div class="container">
			<?php get_template_part('includes/loops/services');?>
		</div>
	</div>



<?php get_template_part('includes/footer'); ?>