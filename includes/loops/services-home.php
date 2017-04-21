<?php
	
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'servicio'
	);

	$counter = 0;
	query_posts($args);
	while(have_posts()):the_post();
?>
	
	<article class="services item-<?php echo $counter; ?> col-md-4" id="post_<?php the_ID()?>">
		<figure class="thumbs">
			<?php the_post_thumbnail('medium'); ?>
		</figure>
		<div class="caption">
			<a href="<?php the_permalink(); ?>">
				<h3><?php the_title(); ?></h3>
			</a>
			<?php the_excerpt(); ?>
		</div>
	</article>

<?php
	$counter ++;
	endwhile;
	wp_reset_query();
?>