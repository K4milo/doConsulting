<?php
  /*
    Template Name: Services
  */
	get_template_part('includes/header'); ?>

	<div class="banner-services">
		<div class="container no-gutter">
			<header>
				<h2>Servicios</h2>
			</header>
			<div class="ipad">
				<div class="mask no-gutter">
				<?php get_template_part('includes/loops/services');?>
				</div>
			</div>
		</div>
	</div>
	
	<?php while(have_posts()): the_post(); ?>
	<div class="service-item">
		<header>
			<h2><?php the_title(); ?></h2>
		</header>
		<?php the_content(); ?>
	</div>
<?php endwhile; wp_reset_postdata(); ?>


<?php get_template_part('includes/footer'); ?>