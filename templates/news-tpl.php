<?php
  /*
    Template Name: Noticias
  */
	get_template_part('includes/header'); ?>

	<div class="container list-news">
		<div class="feed-news col-md-8">
			<?php get_template_part('includes/loops/all-posts');?>
		</div>

		<div class="col-md-4" id="sidebar" role="navigation">
	        <?php get_template_part('includes/sidebar'); ?>
	    </div>

	</div>

	


<?php get_template_part('includes/footer'); ?>