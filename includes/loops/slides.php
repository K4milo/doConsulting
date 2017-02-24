<ul class="slide-listing">
	<?php
	//list of child slides
	
		$child_posts = types_child_posts("slide-home"); 

		foreach ($child_posts as $child_post) { 
			//sildes var
			$urlSlide = get_the_post_thumbnail_url($child_post->ID);
			$permalink = get_post_permalink($child_post->ID);
	?>
	<li style="background-image: url(<?php echo $urlSlide; ?>);">	
		<div class="caption">
			<h5><?php echo $child_post->post_title; ?></h5>
			<div class="txt">
				<?php echo $child_post->post_content; ?>
				<a href="<?php echo $permalink; ?>">Ver más</a>
			</div>		
		</div>
	</li>
	<?php } ?>
</ul>
	
	


