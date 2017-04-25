<?php
  /*
    Template Name: Clients
  */
	get_template_part('includes/header'); ?>

	<div class="container-fluid">
		<div class="row main">
			<div class="container">
				<?php while(have_posts()): the_post(); ?>
				<div class="content">
					<header>
						<h2><?php the_title(); ?></h2>
					</header>
					<?php the_content(); ?>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="row events">
			<div class="container">
				<header>
					<h2>Eventos</h2>
				</header>
				<?php get_template_part('includes/loops/last-three-posts'); ?>
			</div>
		</div>
	</div>


<?php get_template_part('includes/footer'); ?>