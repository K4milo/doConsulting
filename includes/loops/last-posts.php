<?php
	
	$args = array(
		'posts_per_page' => 2,
		'offset' => 1
	);

	query_posts($args);
	while(have_posts()):the_post();
?>
	
	<article class="last-posts item" id="post_<?php the_ID()?>">
		<figure class="thumbs">
			<?php the_post_thumbnail('thumbnail'); ?>
		</figure>
		<div class="caption">
			<header>
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
				</a>
			</header>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="link-info">Ver Más</a>
		</div>
	</article>

<?php
	endwhile;
	wp_reset_query();
?>