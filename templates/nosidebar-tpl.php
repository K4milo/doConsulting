<?php
  /*
    Template Name: No Sidebar
  */
	get_template_part('includes/header'); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<?php while(have_posts()): the_post(); ?>
				<div class="content">
					<header class="def-header">
						<h2><?php the_title(); ?></h2>
					</header>
					<?php the_content(); ?>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>


<?php get_template_part('includes/footer'); ?>