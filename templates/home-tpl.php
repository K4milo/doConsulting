<?php
  /*
    Template Name: Home
  */
	get_template_part('includes/header'); ?>


	<!--Slider home-->
	<?php get_template_part('includes/loops/slides');?>

	<div class="container featured-news">
		<div class="featured col-md-6">
			<?php get_template_part('includes/loops/last-post');?>
		</div>
		<div class="feed-news col-md-6">
			<header class="feed-head">
				<h3>Noticias</h3>
			</header>
			<?php get_template_part('includes/loops/last-posts');?>
		</div>
	</div>

	<div class="container bottom-news">
		<?php get_template_part('includes/loops/last-three-posts');?>
	</div>

<?php get_template_part('includes/footer'); ?>