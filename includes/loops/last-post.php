<?php
	
	$args = array(
		'posts_per_page' => 1
	);

	query_posts($args);
	while(have_posts()):the_post();
?>
	
	<article class="last-post" id="post_<?php the_ID()?>">
		<header>
			<a href="<?php the_permalink(); ?>">
				<h3><?php the_title(); ?></h3>
			</a>
		</header>
		<figure class="thumbs">
			<?php the_post_thumbnail('full'); ?>
		</figure>
		<div class="caption">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="link-info">Ver Más</a>
		</div>
	</article>

<?php
	endwhile;
	wp_reset_query();
?>